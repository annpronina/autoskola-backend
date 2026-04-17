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
        Schema::table('driving_lessons', function (Blueprint $table) {
            $table->unique(['driving_instructor_id', 'start_time', 'date']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('driving_lessons', function (Blueprint $table) {
            $table->dropUnique(['driving_instructor_id', 'start_time', 'date']);
        });
    }
};
