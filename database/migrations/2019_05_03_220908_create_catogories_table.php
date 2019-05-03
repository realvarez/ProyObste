<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatogoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catogories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('category_name');
            $table->smallInteger('category_level');
            $table->integer('superior_category_id')->nullable($value = true);
            $table->boolean('state');
            $table->dateTime('elimination_date')->nullable($value = true)->default(null);
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
        Schema::dropIfExists('catogories');
    }
}
