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
        Schema::table('growth_records', function (Blueprint $table) {
            $table->string('group')->default('conference')->after('id'); // conference, award
            $table->string('sub_category')->nullable()->after('category'); // e.g. "1st Excellence Award"
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('growth_records', function (Blueprint $table) {
            $table->dropColumn(['group', 'sub_category']);
        });
    }
};
