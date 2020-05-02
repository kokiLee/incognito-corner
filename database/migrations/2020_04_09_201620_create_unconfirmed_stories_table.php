<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnconfirmedStoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unconfirmed_stories', function (Blueprint $table) {
            $table->id();

            $table->string('author')->default('Anonymous');
            $table->string('text', 1500);
            $table->string('tags')->nullable();
            $table->integer('approvals')->default(0);
            $table->integer('disapprovals')->default(0);
            $table->integer('reports')->default(0);
            $table->string('type');

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
        Schema::dropIfExists('unconfirmed_stories');
    }
}
