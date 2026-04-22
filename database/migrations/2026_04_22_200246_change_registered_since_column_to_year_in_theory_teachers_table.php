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
        Schema::table('theory_teachers', function (Blueprint $table) {
            $table->year('registered_since')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('theory_teachers', function (Blueprint $table) {
            $table->date('registered_since')->change();
        });
    }
};
