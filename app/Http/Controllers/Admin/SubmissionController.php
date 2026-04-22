<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Submission;
use App\Models\Form;
use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    public function index()
    {
        $submissions = Submission::with(['form', 'user'])->latest()->paginate(20);
        return view('admin.submissions.index', compact('submissions'));
    }

    public function formSubmissions(Form $form)
    {
        $submissions = $form->submissions()->with('user')->latest()->paginate(20);
        return view('admin.submissions.index', compact('submissions', 'form'));
    }

    public function show(Submission $submission)
    {
        $submission->load(['form', 'user', 'payment']);
        return view('admin.submissions.show', compact('submission'));
    }

    public function destroy(Submission $submission)
    {
        $submission->delete();
        return back()->with('success', 'Submission deleted successfully.');
    }

    public function markAsPaid(Submission $submission)
    {
        $submission->update(['payment_status' => 'completed']);
        return back()->with('success', 'Payment verified and marked as paid manually.');
    }
}
