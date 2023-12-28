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
        Schema::create('manga_genres', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('genre_id')->index();
            $table->unsignedBigInteger('manga_id')->index();

            $table->timestamps();

            $table->foreign('genre_id')->references('id')->on('genres');
            $table->foreign('manga_id')->references('id')->on('mangas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manga_genres');
    }
};
