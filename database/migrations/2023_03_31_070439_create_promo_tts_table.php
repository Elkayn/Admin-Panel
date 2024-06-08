<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromoTtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promo_tts', function (Blueprint $table) {
            $table->id();
            $table->string('titlet');
            $table->string('subtitlet');
            $table->text('textt');
            $table->text('subtextt');
            $table->string('imaget');
            $table->string('linkt');
            $table->string('sublinkt');
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
        Schema::dropIfExists('promo_tts');
    }
}
