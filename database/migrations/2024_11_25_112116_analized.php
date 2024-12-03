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
        Schema::create('analized', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->integer('jam');
            $table->integer('quizz');
            // $table->unsignedBigInteger('modul'); // Kolom baru sebagai foreign key
            // $table->foreign('modul')->references('id')->on('modul');
            $table->json('modul');
            $table->integer('pemahaman');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('analized');
    }
};
