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
        Schema::create('digital_designs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('sub_title');
            $table->string('banner_image')->nullable();
            $table->string('banner_image_name')->nullable();
            $table->text('description')->nullable();
            $table->string('url_title')->nullable();
            $table->string('url_link')->nullable();
            $table->string('client')->nullable();
            $table->string('year')->nullable();
            $table->string('role')->nullable();
            $table->string('banner_image_2')->nullable();
            $table->string('banner_image_2_name')->nullable();
            $table->string('section_title_1')->nullable();
            $table->text('section_description_1')->nullable();
            $table->string('section_title_2')->nullable();
            $table->text('section_description_2')->nullable();
            $table->string('button_title')->nullable();
            $table->string('button_link')->nullable();
            $table->string('banner_image_3')->nullable();
            $table->string('banner_image_3_name')->nullable();
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
        Schema::dropIfExists('digital_designs');
    }
};
