<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamContributorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_contributors_table', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('team_id')->unsigned();
            $table->bigInteger('contributor_id')->unsigned();
            $table->timestamps();
            
            $table->foreign('contributor_id')->references('id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('team_id')->references('id')->on('teams')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('team_contributors_table');
    }
}
