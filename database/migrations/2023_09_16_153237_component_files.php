<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('component_files', function (Blueprint $table) {
            $table->id();
            $table->integer('folder');
            $table->string('name');
            $table->integer('tag');
            $table->text('options')->nullable();
            $table->longText('value')->nullable();
            $table->tinyInteger('display')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('component_files');
    }
};
