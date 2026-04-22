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
            $table->text('address')->nullable()->after('designation');
            $table->string('city')->nullable()->after('address');
            $table->string('pincode')->nullable()->after('city');
            $table->string('country')->nullable()->after('pincode');
            $table->string('gstin')->nullable()->after('country');
            $table->string('website')->nullable()->after('gstin');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'address',
                'city',
                'pincode',
                'country',
                'gstin',
                'website'
            ]);
        });
    }
};
