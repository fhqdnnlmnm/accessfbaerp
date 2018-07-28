<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id');
            $table->string('name');
            // 联系人岗位
            $table->string('post');
            // 联系人部门
            $table->string('department');
            // 尊称
            $table->string('saltname');
            // 联系人电话
            $table->string('telephone',20);
            // 联系人邮箱
            $table->string('email',50);
            // 联系人QQ
            $table->string('qq_no',50);
            // 联系人地址
            $table->string('address',50);
            // 联系人信息备注
            $table->text('desc');
            // 联系人性别
            $table->unsignedTinyInteger('sex');
            // 联系人微信
            $table->string('weixin',20);
            $table->timestamps();

            $table->foreign('customer_id')->references('id')->on('customer');
            $table->index('id','name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
