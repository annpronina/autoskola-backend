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
        Schema::table('vehicles', function (Blueprint $table) {
            $table->dropForeign(['vehicle_fuel_type_id']);

            $table->dropColumn('vehicle_fuel_type_id');
            
            $table->foreignId('vehicle_fuel_type_id')   
                ->nullable()    
                ->constrained('vehicle_fuel_type', 'id')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vehicles', function (Blueprint $table) {
            $table->dropForeign('vehicle_fuel_type_id');

            $table->dropColumn('vehicle_fuel_type_id');

            $table->foreignId('vehicle_fuel_type_id')
                ->default(1)
                ->constrained('vehicle_fuel_type', 'id')
                ->cascadeOnDelete();
        });
    }
};
