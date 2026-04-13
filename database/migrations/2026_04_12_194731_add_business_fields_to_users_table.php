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
        Schema::table('users', function (Blueprint $table) {
            $table->string('company_name')->nullable()->after('email');
            $table->string('designation')->nullable()->after('company_name');
            $table->string('phone_number')->nullable()->after('designation');
            $table->string('industry_sector')->nullable()->after('phone_number');
            $table->string('membership_status')->default('pending')->after('industry_sector');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'company_name',
                'designation',
                'phone_number',
                'industry_sector',
                'membership_status'
            ]);
        });
    }
};
