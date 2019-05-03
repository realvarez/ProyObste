<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->integer('category_id');

            $table->string('file_name');
            $table->string('file_path');
            $table->year('file_year');
            $table->boolean('state');
            $table->smallInteger('storage_type');
            $table->dateTime('elimination_date')->nullable($value = true)->default(null);
            $table->timestamps();

            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // $table->foreign('category_id')->references('id')->on('category')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('files');
    }
}
