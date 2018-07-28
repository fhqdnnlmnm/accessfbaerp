<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            // 首要联系人
            $table->integer('contact_id')->unsigned();
            $table->string('name'); 
            $table->string('code');
            // 账期：0 => 票结，1 => 月结，默认为票结
            $table->unsignedTinyInteger('account_period')->default(0);
            // 支付方式：0 => 公账，1 => 私账，默认为公账
            $table->unsignedTinyInteger('pay_type')->default(0);
            // 公司地址
            $table->string('address');
            // 客户来源
            $table->string('origin');
            // 所属行业
            $table->string('industry');
            // 年营业额
            $table->string('annual_revenue',20);
            $table->timestamps();

            // 确定联系人的外键
            $table->foreign('contact_id')->references('id')->on('contacts');
            $table->unique('name','code');
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
        Schema::dropIfExists('customers');
    }
}
