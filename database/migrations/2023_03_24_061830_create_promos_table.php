<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promos', function (Blueprint $table) {
            $table->id();
            $table->integer('promo_ru_id');
            $table->integer('promo_en_id');
            $table->integer('promo_tt_id');
            $table->foreign('promo_ru_id')->references('id')->on('promo_rus')->onDelete('cascade');
            $table->foreign('promo_en_id')->references('id')->on('promos_ens')->onDelete('cascade');
            $table->foreign('promo_tt_id')->references('id')->on('promos_tts')->onDelete('cascade');
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
        Schema::dropIfExists('promos');
    }
}
