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
        Schema::create('cantiques', function (Blueprint $table) {
            $table->id();
            $table->integer('numero')->unique();
            $table->string('titreFR');
            $table->string('titreMoore');
            $table->text('paroles');
            $table->integer('nbvoix');
            $table->string('audio_tous')->nullable();
            $table->string('audio_soprano')->nullable();
            $table->string('audio_altos')->nullable();
            $table->string('audio_tenor')->nullable();
            $table->string('audio_basse')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cantiques');
    }
};
