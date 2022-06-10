<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;


class CreatePokemonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemons', function (Blueprint $table) {
            $table->id();
            $table->string('name', 200)->nullable();
            $table->string('type_1', 50)->nullable();
            $table->string('type_2', 50)->nullable();
            $table->integer('total_points')->nullable();
            $table->integer('health_points')->nullable();
            $table->integer('attack_points')->nullable();
            $table->integer('defense_points')->nullable();
            $table->integer('special_attack_points')->nullable();
            $table->integer('special_defense_points')->nullable();
            $table->integer('speed_points')->nullable();
            $table->tinyInteger('generation')->nullable();
            $table->string('egg_group', 50)->nullable();
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
        Schema::dropIfExists('pokemon');
    }
}
