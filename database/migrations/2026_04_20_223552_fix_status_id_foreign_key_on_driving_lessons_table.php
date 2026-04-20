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
            $table->dropForeign(['status_id']);
            $table->dropColumn('status_id');
        });
        Schema::table('driving_lessons', function (Blueprint $table) {
            $table->foreignId('status_id')
                ->default(1)
                ->constrained('driving_lesson_status', 'id')
                ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('driving_lessons', function (Blueprint $table) {
            $table->dropForeign(['status_id']);
            $table->dropColumn('status_id');
        });

        Schema::table('driving_lessons', function (Blueprint $table) {
            $table->foreignId('status_id')
                ->default(1)
                ->constrained('driving_lesson_status', 'id')
                ->cascadeOnDelete();
        });
    }
};
