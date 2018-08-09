<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            // 客户id
            $table->integer('customer_id')->unsigned();
            // 中文品名
            $table->string('cname');
            // 英文品名
            $table->string('ename');
            // 产品尺寸
            $table->string('size');
            // 产品型号
            $table->string('model');
            // 海关编码
            $table->string('hscode');
            //税率
            $table->decimal('tax_rate',3,1);
            //单价
            $table->decimal('price',9,2);
            //材质
            $table->string('material');
            // 材质比例
            $table->string('material_rate');
            // 用途
            $table->string('purpose');
            // 品牌
            $table->string('brand');
            // 品牌类型
            $table->string('brand_type');
            // 出口享优惠情况
            $table->string('export_benefits');
            // 生产厂家
            $table->string('maker');
            // 生产厂家地址
            $table->string('maker_add');
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
        Schema::dropIfExists('products');
    }
}
