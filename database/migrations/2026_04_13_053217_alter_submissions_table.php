<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('submissions', function (Blueprint $table) {
            $table->dropForeign(['award_category_id']);
        });
        
        Schema::table('submissions', function (Blueprint $table) {
            $table->unsignedBigInteger('award_category_id')->nullable()->change();
            $table->foreign('award_category_id')->references('id')->on('award_categories')->nullOnDelete();
            
            $table->decimal('total_amount_paid', 10, 2)->nullable()->after('data');
            $table->string('payment_status')->nullable()->after('total_amount_paid');
        });
    }

    public function down(): void {
        Schema::table('submissions', function (Blueprint $table) {
            $table->dropColumn(['total_amount_paid', 'payment_status']);
        });
    }
};
