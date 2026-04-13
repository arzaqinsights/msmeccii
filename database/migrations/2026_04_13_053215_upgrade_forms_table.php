<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('forms', function (Blueprint $table) {
            $table->string('slug')->nullable()->after('name')->unique();
            $table->string('submit_button_text')->default('Submit Information')->after('description');
            $table->text('thank_you_message')->nullable()->after('submit_button_text');
            $table->enum('status', ['published', 'draft'])->default('draft')->after('thank_you_message');
        });
    }

    public function down(): void {
        Schema::table('forms', function (Blueprint $table) {
            $table->dropColumn(['slug', 'submit_button_text', 'thank_you_message', 'status']);
        });
    }
};
