<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassPromosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_promos', function (Blueprint $table) {
            $table->bigIncrements('promo_id');
            $table->char('pack_id', 36);
            $table->string('promo_code', 100);
            $table->integer('discount');
            $table->timestamps();
            $table->foreign('pack_id')->references('pack_id')->on('class_packs');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('class_promos');
    }
}
