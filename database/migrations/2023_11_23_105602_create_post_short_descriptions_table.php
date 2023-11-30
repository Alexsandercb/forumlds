<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostShortDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_short_descriptions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('post_id'); // Corrigir para 'post_id'
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade'); // Corrigir para 'post_id'
            $table->text('desc');
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
        Schema::dropIfExists('post_short_descriptions');
    }
}
