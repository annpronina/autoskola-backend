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
        Schema::create('vehicle_transmission', function (Blueprint $table) {
            $table->id();
            $table->string('transmission');
        });

        Schema::table('vehicles', function (Blueprint $table) {
            $table->foreignId('vehicle_transmission_id')
                ->default(1)    
                ->constrained('vehicle_transmission', 'id')   
                ->cascadeOnDelete();
            
            $table->dropColumn('transmission');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    Schema::table('vehicles', function (Blueprint $table) {
            $table->dropForeign(['vehicle_transmission_id']);
            $table->dropColumn('vehicle_transmission_id');
        });

        Schema::dropIfExists('vehicle_transmission');
    }
};
