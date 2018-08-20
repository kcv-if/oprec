<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiodatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodatas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nrp', 14)->unique();
            $table->string('nama');
            $table->string('idline');
            $table->string('alasan');
            $table->string('hobi');
            $table->string('kesibukan');
            $table->string('path_foto');
            $table->string('path_transkrip');
            $table->tinyInteger('mk1');
            $table->tinyInteger('mk2');
            $table->tinyInteger('mk3');
            $table->tinyInteger('mk4');
            $table->tinyInteger('mk5');
            $table->tinyInteger('mk6');
            $table->tinyInteger('mk7');
            $table->tinyInteger('mk8');
            $table->tinyInteger('mk9');
            $table->tinyInteger('mk10');
            $table->tinyInteger('mk11');
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
        Schema::dropIfExists('biodatas');
    }
}
