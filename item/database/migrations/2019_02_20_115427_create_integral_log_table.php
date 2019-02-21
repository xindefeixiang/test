<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIntegralLogTable extends Migration
{
    /**
     * Run the migrations.
     *积分日志表
     * @return void
     */
    public function up()
    {
        Schema::create('integral_log', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('uid')->comment("用户id");
            $table->string('type','255')->comment("积分操作类型");
            $table->string('intro','255')->comment("详细信息");
            $table->dateTime('date')->comment("具体时间");
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
        Schema::dropIfExists('integral_log');
    }
}
