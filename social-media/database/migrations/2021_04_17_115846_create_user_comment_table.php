<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_comment', function (Blueprint $table) {
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('user');
            $table->unsignedBigInteger('id_comment');
            $table->foreign('id_comment')->references('id')->on('comment');
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
        Schema::dropIfExists('user_comment');
    }
}
