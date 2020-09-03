<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')
                ->nullable()
                ->references('id')
                ->on('students')
                ->onDelete('SET NULL');
            $table->foreignId('plan_id')
                ->nullable()
                ->references('id')
                ->on('plans')
                ->onDelete('SET NULL');
            $table->decimal('price', 10, 2);
            $table->timestampTz('start_at');
            $table->timestampTz('end_at');
            $table->timestampsTz();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registrations');
    }
}
