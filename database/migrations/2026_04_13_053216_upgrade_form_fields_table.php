<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('form_fields', function (Blueprint $table) {
            $table->string('field_identifier')->nullable()->after('id');
            $table->string('depends_on')->nullable()->after('options')->comment('Parent field_identifier');
            $table->string('depends_on_value')->nullable()->after('depends_on')->comment('Trigger value of parent');
            $table->decimal('base_amount', 10, 2)->nullable()->after('depends_on_value');
            $table->decimal('tax_percentage', 5, 2)->nullable()->after('base_amount');
        });
    }

    public function down(): void {
        Schema::table('form_fields', function (Blueprint $table) {
            $table->dropColumn(['field_identifier', 'depends_on', 'depends_on_value', 'base_amount', 'tax_percentage']);
        });
    }
};
