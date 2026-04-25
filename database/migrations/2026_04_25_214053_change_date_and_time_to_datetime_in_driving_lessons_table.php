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
            $table->dateTime('starts_at');
            $table->dateTime('ends_at');
            $table->unique(['driving_instructor_id', 'starts_at', 'ends_at']);
        });

        Schema::table('driving_lessons', function (Blueprint $table) {
            if (Schema::hasIndex('driving_lessons', ['driving_instructor_id', 'start_time', 'date'], 'unique')) {
                $table->dropUnique(['driving_instructor_id', 'start_time', 'date']);
            }
            $table->dropColumn(['date', 'start_time', 'end_time']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('driving_lessons', function (Blueprint $table) {
            $table->date('date');
            $table->time('start_time');
            $table->time('end_time');
            $table->unique(['driving_instructor_id', 'date', 'start_time']);
        });

        Schema::table('driving_lessons', function (Blueprint $table) {
            if (Schema::hasIndex('driving_lessons', ['driving_instructor_id', 'starts_at', 'ends_at'])) {
                $table->dropUnique(['driving_instructor_id', 'starts_at', 'ends_at']);
            }
            $table->dropColumn(['starts_at', 'ends_at']);
        });
    }
};