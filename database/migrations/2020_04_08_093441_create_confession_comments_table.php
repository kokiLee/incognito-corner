<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfessionCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('confession_comments', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('story_id');
            $table->foreign('story_id')->references('id')->on('confessions')->onDelete('cascade');

            $table->string('author')->default('Anonymous');
            $table->string('text', 1000);
            $table->integer('approvals')->default(0);
            $table->integer('disapprovals')->default(0);
            $table->integer('popularity')->default(0);
            $table->integer('number_of_subcomments')->default(0);
            
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
        Schema::dropIfExists('confession_comments');
    }
}
