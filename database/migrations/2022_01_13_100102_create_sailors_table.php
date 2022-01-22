<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSailorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sailors', function (Blueprint $table) {
            $table->id();
            $table->integer('rank_id');
            $table->integer('candidate_id');
            $table->integer('ship_id');
            $table->string('blood');
            $table->integer('point');
            
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
        Schema::dropIfExists('sailors');
    }
}
