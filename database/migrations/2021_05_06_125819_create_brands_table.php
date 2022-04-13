<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('brand_name');
            $table->integer('height');
            $table->integer('width');
            $table->integer('length');
            $table->integer('weight');
            $table->integer('price');
            $table->date('end_date');
            $table->time('end_time');
            $table->string('brand_image');
            $table->text('opis');
            $table->timestamps();

            $table->string('from_name');
            $table->string('from_surname');
            $table->string('to_name');
            $table->string('to_surname');
            $table->string('from_phone');
            $table->string('to_phone');
            $table->string('from_street');
            $table->string('from_city');
            $table->string('from_state');
            $table->string('to_street');
            $table->string('to_city');
            $table->string('to_state');
            $table->integer('from_post_nr');
            $table->string('from_post');
            $table->integer('to_post_nr');
            $table->string('to_post');

            $table->date('date_of_go');
            $table->time('time_of_go');

            $table->integer('bidder_id');
        });
    }





    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brands');
    }
}
