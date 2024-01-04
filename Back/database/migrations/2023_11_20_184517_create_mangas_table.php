<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mangas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('type_id')->index();
            $table->string('title',100);
            $table->string('image',255);
            $table->string('author',100);
            $table->string('editor',100);
            $table->longText('synopsis');
            $table->string('status',20);
            $table->integer('popularity');
            $table->date('release_date');

            $table->timestamps();

            $table->foreign('type_id')->references('id')->on('types');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mangas');
    }
};
