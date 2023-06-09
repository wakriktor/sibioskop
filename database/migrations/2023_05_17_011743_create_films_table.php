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
        Schema::create('films', function (Blueprint $table) {
            $table->id('filmID');
            $table->string('title');
            $table->string('slug');
            $table->string('linkPoster');
            $table->string('linkTrailerID');
            $table->string('linkCoverTrailer');
            $table->integer('skorFilm');
            $table->string('genre');
            $table->string('durasi');
            $table->string('sutradara');
            $table->string('ratingUsia');
            $table->string('sinopsis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
