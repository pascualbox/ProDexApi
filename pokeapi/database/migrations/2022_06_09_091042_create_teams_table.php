<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string("team_name");
            $table->unsignedBigInteger("user_id")->nullable();
            $table->string("pokemon_1");
            $table->string("pokemon_2");
            $table->string("pokemon_3");
            $table->string("pokemon_4");
            $table->string("pokemon_5");
            $table->string("pokemon_6");
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
    }
}
