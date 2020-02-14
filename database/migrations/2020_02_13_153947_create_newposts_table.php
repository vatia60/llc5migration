<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewpostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newposts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsingedInteger('user_id');
            $table->unsingedInteger('category_id');
            $table->string('title', 128);
            $table->longText('content');
            $table->string('thumbnail_path', 128);
            $table->string('status', 32)->default('draft');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('user')->onDelate('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('newposts');
    }
}
