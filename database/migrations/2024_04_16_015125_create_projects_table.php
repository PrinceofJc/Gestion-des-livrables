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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('nomprojet');
            $table->string('filiale');
            $table->string('campagne');
            $table->string('nbrecasprevu');
            $table->string('qualif');
            $table->string('homo');
            $table->string('post');
            $table->string('budgetprev');
            $table->string('budgetreel');
            $table->string('gap');
            $table->date('datedeb');
            $table->date('datef');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
