<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTheoryTestQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('theory_test_questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('theory_test_id')->constrained('theory_tests');
            $table->string('question');
            $table->string('type');
            $table->boolean('required');
            $table->text('description')->nullable();
            $table->json('multiple_choice_answers')->nullable();
            $table->boolean('auto_fail_if_incorrect');
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
        Schema::dropIfExists('theory_test_questions');
    }
}
