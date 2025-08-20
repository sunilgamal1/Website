<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('graphic_arts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('sub_title');
            $table->string('banner_image')->nullable();
            $table->string('banner_image_name')->nullable();
            $table->text('description')->nullable();
            $table->string('url_title')->nullable();
            $table->string('url_link')->nullable();
            $table->string('client');
            $table->string('year');
            $table->string('role');
            $table->string('banner_image_2');
            $table->string('banner_image_2_name');
            $table->text('conclusion')->nullable();
            $table->boolean('publish_at_home')->default(false);
            $table->boolean('status')->default(true);
            $table->integer('position')->default(0);
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
        Schema::dropIfExists('graphic_arts');
    }
};
