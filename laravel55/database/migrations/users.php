<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('mobile', 20)->unique()->index()->null()->default('')->comment('手机号');
            $table->string('nick_name', 50)->index()->null()->default('')->comment('昵称');
            $table->string('password', 100)->null()->default('')->comment('密码');
            $table->string('avatar', 255)->null()->default('')->comment('头像');
            $table->tinyInteger('sex')->null()->default('0')->comment('性别 1男 2女');
            $table->string('province', 20)->null()->default('')->comment('省份');
            $table->string('city', 20)->null()->default('')->comment('城市');
            $table->unsignedInteger('created_at')->null()->default('0')->comment('创建时间');
            $table->unsignedInteger('updated_at')->null()->default('0')->comment('更新时间');
            $table->string('type',20)->null()->default('')->comment('登录类型');
            $table->string('open_id',100)->index()->null()->default('')->comment('第三方openID');
            $table->string('union_id',100)->index()->null()->default('')->comment('unionid');
            $table->unsignedInteger('deleted_at')->nullable()->comment('删除时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
