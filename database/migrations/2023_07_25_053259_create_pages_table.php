<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->boolean('status')->default(false);
            $table->string('image')->nullable();
            $table->text('description');
            $table->string('meta_title');
            $table->string('meta_description')->nullable();
            $table->string('keywords')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations. ..;
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
}
