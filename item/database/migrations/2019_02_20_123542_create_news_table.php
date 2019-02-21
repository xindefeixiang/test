<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->string('img',100);
            $table->string('content',255);
            $table->dateTime('time');
            $table->integer('look_num')->comment("浏览量");
            $table->integer('comment')->comment("总评论数");
            $table->integer('yngroom')->comment("是否推荐");
            $table->string('resource',50)->comment("来源");
            $table->integer('type');
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
        Schema::dropIfExists('news');
    }
}
