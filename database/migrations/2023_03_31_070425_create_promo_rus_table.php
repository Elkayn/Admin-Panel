<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromoRusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promo_rus', function (Blueprint $table) {
            $table->id();
            $table->string('titler');
            $table->string('subtitler');
            $table->text('textr');
            $table->text('subtextr');
            $table->string('imager');
            $table->string('linkr');
            $table->string('sublinkr');
            $table->softDeletes();
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
        Schema::dropIfExists('promo_rus');
    }
}
