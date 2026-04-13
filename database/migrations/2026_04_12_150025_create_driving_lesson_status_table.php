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
        Schema::create('driving_lesson_status', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        Schema::table('driving_lessons', function (Blueprint $table){
            $table->foreignId('status_id')
                ->default(1)    
                ->constrained('driving_lesson_status', 'id')   
                ->cascadeOnDelete();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('driving_lesson_status');
        Schema::table('driving_lessons', function (Blueprint $table) {
            $table->dropForeign(['status_id']);
        });
        Schema::dropColumns('driving_lessons', 'status_id');
    }
};
