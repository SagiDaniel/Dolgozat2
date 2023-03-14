<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function(Blueprint $table){
            $table->id();
            $table->string("name",100);
            $table->string("gender",6);
            $table->string("job",255);
            $table->string("wand",50);
            $table->string("patronus",50);
            $table->string("soecues",50);
            $table->dateTime("birth");
            $table->dateTime("death");
            $table->house_id();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
