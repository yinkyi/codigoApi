<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassPacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_packs', function (Blueprint $table) {
            $table->uuidMorphs('pack');
            $table->integer('disp_order');
            $table->string('pack_name', 200);
            $table->text('pack_description');
            $table->integer('total_credit');
            $table->string('tag_name', 200)->nullable();
            $table->integer('validity_month');
            $table->double('pack_price', 8, 2);
            $table->boolean('newbie_first_attend')->default(false);
            $table->integer('newbie_addition_credit');
            $table->longText('newbie_note')->nullable();
            $table->string('pack_alias', 200);
            $table->double('estimate_price', 8, 2);
            $table->enum('mem_tier', ['newbie', 'sliver', 'gold']);
            $table->timestamps();
            $table->primary('pack_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('class_packs');
    }
}
