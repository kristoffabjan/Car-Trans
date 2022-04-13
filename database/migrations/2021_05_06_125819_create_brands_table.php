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
            $table->integer('user_id')->nullable();
            $table->string('brand_name')->nullable();
            $table->integer('height')->nullable();
            $table->integer('width')->nullable();
            $table->integer('length')->nullable();
            $table->integer('weight')->nullable();
            $table->integer('price')->nullable();
            $table->date('end_date')->nullable();
            $table->time('end_time')->nullable();
            $table->string('brand_image')->nullable();
            $table->text('opis')->nullable();

            $table->string('from_name')->nullable();
            $table->string('from_surname')->nullable();
            $table->string('to_name')->nullable();
            $table->string('to_surname')->nullable();
            $table->string('from_phone')->nullable();
            $table->string('to_phone')->nullable();
            $table->string('from_street')->nullable();
            $table->string('from_city')->nullable();
            $table->string('from_state')->nullable();
            $table->string('to_street')->nullable();
            $table->string('to_city')->nullable();
            $table->string('to_state')->nullable();
            $table->integer('from_post_nr')->nullable();
            $table->string('from_post')->nullable();
            $table->integer('to_post_nr')->nullable();
            $table->string('to_post')->nullable();

            $table->date('date_of_go')->nullable();
            $table->time('time_of_go')->nullable();

            $table->integer('bidder_id')->nullable();
            $table->integer('ride_type')->nullable();

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
        Schema::dropIfExists('brands');
    }
}
