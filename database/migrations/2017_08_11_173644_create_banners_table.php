<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //banner table
        Schema::create('banners', function (Blueprint $table) {
            $table->increments('id');
            $table->char('type', 20);//decide which page to show the banner (welcome|activity|...)
            $table->string('cover');
            $table->string('url');//decide redirecting to which page
            $table->tinyInteger('is_display');
            $table->string('comment');
            $table->timestamp('created_at')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('banners');
    }
}
