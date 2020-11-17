<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salons', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('type');
            $table->string('urlKey');
            $table->string('avatarUrl');
            $table->string('cityName');
            $table->string('description');
            $table->string('instagramProfile');
            $table->string('averageRating');
            $table->string('reviewCount');
            $table->string('phoneNumbers');
            $table->string('markerX');
            $table->string('markerY');
            $table->string('centerX');
            $table->string('centerY');
            $table->string('zoom');
            $table->string('cat_key');
            $table->string('ownerId')->default(1);
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
        Schema::dropIfExists('salons');
    }
}
