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
        Schema::create('group_statuses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        Schema::table('groups', function (Blueprint $table) {
            $table->foreignId('status_id')
                ->default(1)    
                ->constrained('group_statuses', 'id')   
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('group_statuses');
        Schema::table('groups', function (Blueprint $table) {
            $table->dropForeign(['status_id']);
        });
        Schema::dropColumns('groups', 'status_id');
    }
};
