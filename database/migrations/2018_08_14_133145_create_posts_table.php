<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title');
            $table->text('link');
            $table->longText('body');
            $table->string('description',110)->default('Nothing');
            $table->string('mainImage',100)->default('/images/uploaded/1534472136_0_website.webp');
            $table->string('type',5)->default('proj');   
            $table->string('status',10)->default('preview');
            $table->integer('countComments')->default(0);
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
        Schema::dropIfExists('posts');
    }
}
