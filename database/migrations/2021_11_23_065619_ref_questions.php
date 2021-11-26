<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RefQuestions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('quiz_id');
            $table->longText('question');
            $table->longText('option_a');
            $table->longText('option_b');
            $table->longText('option_c');
            $table->longText('option_d');
            $table->enum('answer', ['A', 'B', 'C', 'D'])->nullable();
            $table->string('image')->nullable();
            $table->enum('status', ['true', 'false']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
