<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_user');
            $table->unsignedInteger('id_color');
            $table->unsignedInteger('id_size');
            $table->unsignedInteger('id_category');
            $table->unsignedInteger('id_brand');
            $table->unsignedInteger('id_sale');
            $table->unsignedInteger('id_gender');
            $table->string('meta_title');
            $table->string('meta_keyword');
            $table->string('name');
            $table->string('slug');
            $table->string('images_default');
            $table->string('images');
            $table->string('price_in');
            $table->string('price_out');
            $table->boolean('status');  
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->softDeletes('deleted_at')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
