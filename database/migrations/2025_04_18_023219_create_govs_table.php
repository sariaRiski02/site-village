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
        Schema::create('govs', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // nama
            $table->string('position'); // jabatan
            $table->unsignedBigInteger('parent')->nullable(); // induk (nullable untuk root, seperti CEO)
            $table->integer('hirarki')->default(0); // urutan opsional
            $table->string('image')->nullable(); // profil foto opsional
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('govs');
    }
};
