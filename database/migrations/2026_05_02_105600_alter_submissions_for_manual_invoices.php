<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('submissions', function (Blueprint $table) {
            $table->foreignId('form_id')->nullable()->change();
            $table->foreignId('award_category_id')->nullable()->change();
            $table->string('manual_invoice_number')->nullable()->after('total_amount_paid');
            $table->json('items')->nullable()->after('manual_invoice_number'); // For manual items
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('submissions', function (Blueprint $table) {
            $table->foreignId('form_id')->nullable(false)->change();
            $table->foreignId('award_category_id')->nullable(false)->change();
            $table->dropColumn(['manual_invoice_number', 'items']);
        });
    }
};
