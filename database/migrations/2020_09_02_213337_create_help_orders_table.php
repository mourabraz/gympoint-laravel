<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHelpOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('help_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')
                ->nullable()
                ->references('id')
                ->on('students')
                ->onDelete('SET NULL');
            $table->text('question');
            $table->text('answer');
            $table->timestamp('answer_at');
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
        Schema::dropIfExists('help_orders');
    }
}
