<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCoverImageToPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function($table){
            $table->string('cover_image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * php artisan make:migration add_cover_image_to_posts
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function($table){
            $table->dropColumn('cover_image');
        });
    }
}



