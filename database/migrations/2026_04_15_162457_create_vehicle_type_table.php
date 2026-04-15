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
        Schema::create('vehicle_types', function (Blueprint $table) {
            $table->id();
            $table->string('type');
        });

         Schema::table('vehicles', function (Blueprint $table) {
            $table->foreignId('vehicle_type_id')
                ->default(1)    
                ->constrained('vehicle_types', 'id')   
                ->cascadeOnDelete();
                
            $table->dropColumn('type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vehicles', function (Blueprint $table) {
            $table->dropForeign(['vehicle_type_id']);
            $table->dropColumn('vehicle_type_id');
        });

        Schema::dropIfExists('vehicle_types');
    }
};
