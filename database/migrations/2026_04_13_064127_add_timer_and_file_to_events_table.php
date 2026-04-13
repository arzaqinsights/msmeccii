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
        Schema::table('events', function (Blueprint $table) {
            $table->boolean('show_timer')->default(false)->after('status');
            $table->string('download_file')->nullable()->after('show_timer');
            $table->string('download_btn_text')->nullable()->after('download_file');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('events', function (Blueprint $table) {
            $table->dropColumn(['show_timer', 'download_file', 'download_btn_text']);
        });
    }
};
