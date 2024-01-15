<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('product_id',10)->comment('รหัสสินค้า');
            $table->string('name',255)->comment('รหัสสินค้า');
            $table->string('price',10)->comment('ราคาสินค้า');
            $table->string('description',10)->comment('รายละเอียดสินค้า');
            $table->string('category_id',10)->comment('รหัสประเภทสินค้า');
            $table->string('image',255)->comment('รูปภาพ');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
