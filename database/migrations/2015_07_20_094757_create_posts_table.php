<?php

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
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('title', 100);
            $table->string('slug',100);
            $table->string('excerpt',60);
            $table->text('content');
            $table->dateTime('date_start');
            $table->dateTime('date_end');
            $table->string('thumbnail_link');
            $table->string('url_site');
            $table->enum('status', ['publish', 'unpublish'])->default('unpublish');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('SET NULL');
            $table->softDeletes();
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

        Schema::drop('posts');

    }
}
