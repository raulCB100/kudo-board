<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boards', function (Blueprint $table) {
            $table->bigincrements('id');
            $table->string('title');
            $table->string('image');
            $table->text('description');
            $table->unsignedSmallInteger('type_id');
            $table->unsignedBigInteger('created_by');
            $table->timestamps();
        });
        Schema::table('boards', function (Blueprint $table) {
            $table->foreign('type_id')->references('id')->on('types');
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
        Schema::table('boards', function (Blueprint $table) {
            $table->dropForeign(['type_id']);
            $table->dropForeign(['created_by']);
        });
        Schema::dropIfExists('boards');
    }
}
