<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkManagementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('asset');
            $table->string('problem');
            $table->string('solution');
            $table->dateTime('solve_at');
            $table->timestamps();
        });

        Schema::create('requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nopegawai');
            $table->string('requirment');
            $table->timestamps();
        });

        Schema::create('request_details', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('file_name');
            $table->string('url');
            $table->timestamps();
        });

        Schema::create('todo', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->bigInteger('request_id');
            $table->string('title');
            $table->timestamps();
        });

        Schema::create('todo_details', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->bigInteger('todo_id');
            $table->string('kode');
            $table->string('text');
            $table->date('plan_finish_date');
            $table->date('finish_date');
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
        Schema::dropIfExists('work_management');
    }
}
