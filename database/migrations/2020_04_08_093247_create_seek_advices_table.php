<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeekAdvicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seek_advices', function (Blueprint $table) {
            $table->id();

            $table->string('author')->default('Anonymous');
            $table->string('text', 1500);
            $table->string('tags')->nullable();
            $table->integer('approvals')->default(0);
            $table->integer('disapprovals')->default(0);
            $table->double('rating', 3, 2)->default(0);
            $table->double('rating_sum', 8, 1)->default(0);
            $table->integer('number_of_ratings')->default(0);
            $table->double('popularity', 10, 2)->default(0);
            $table->integer('number_of_comments')->default(0);
            
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
        Schema::dropIfExists('seek_advices');
    }
}
