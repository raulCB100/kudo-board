<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKudosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kudos', function (Blueprint $table) {
            $table->bigincrements('id');
            $table->string('title');
            $table->string('image');
            $table->text('description');
            $table->unsignedBigInteger('board_id');
            $table->unsignedBigInteger('created_by');
            $table->timestamps();
        });
        Schema::table('kudos', function (Blueprint $table) {
            $table->foreign('board_id')->references('id')->on('boards');
            $table->foreign('created_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kudos', function (Blueprint $table) {
            $table->dropForeign(['board_id']);
            $table->dropForeign(['created_by']);
        });
        Schema::dropIfExists('kudos');
    }
}
