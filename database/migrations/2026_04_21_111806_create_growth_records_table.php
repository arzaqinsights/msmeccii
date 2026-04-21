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
        Schema::create('growth_records', function (Blueprint $table) {
            $table->id();
            $table->string('category'); // delegates, speakers, excellence, participated
            $table->string('year');     // e.g. "2019", "2024 (Expected)"
            $table->string('value');    // e.g. "150+", "7500+"
            $table->string('label')->nullable(); // e.g. "Deligate", "in 3 days"
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('growth_records');
    }
};
