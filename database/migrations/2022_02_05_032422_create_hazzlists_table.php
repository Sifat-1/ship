<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHazzlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hazzlists', function (Blueprint $table) {
            $table->id();
            
            $table->integer('sailor_id');
            $table->string('fromdate');
            $table->string('todate');
            $table->integer('year');
            $table->string('status')->default('no');

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
        Schema::dropIfExists('hazzlists');
    }
}
