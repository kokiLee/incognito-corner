<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfessionSubcommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('confession_subcomments', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('comment_id');
            $table->foreign('comment_id')->references('id')->on('confession_comments')->onDelete('cascade');

            $table->string('author')->default('Anonymous');
            $table->string('text', 1000);
            $table->integer('approvals')->default(0);
            $table->integer('disapprovals')->default(0);
            
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
        Schema::dropIfExists('confession_subcomments');
    }
}
