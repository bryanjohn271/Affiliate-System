<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAffMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aff_media', function (Blueprint $table) {
            $table->increments('id');
            $table->string('media_name');
            $table->string('media_thumbnail')->nullable();
            $table->string('title_name')->nullable();
            $table->mediumText('caption')->nullable();
            $table->mediumText('alt_text')->nullable();
            $table->text('description')->nullable();
            $table->string('file_type')->nullable();
            $table->string('file_size')->nullable();
            $table->string('dimension')->nullable();
            $table->integer('country_id')->nullable();
            $table->integer('user_id');
            $table->integer('status_id');
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
        Schema::dropIfExists('aff_media');
    }
}
