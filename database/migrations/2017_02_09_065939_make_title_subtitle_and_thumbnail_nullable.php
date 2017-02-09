<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeTitleSubtitleAndThumbnailNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function($t){
          $t->string('title')->nullable()->change();
          $t->string('subtitle')->nullable()->change();
          $t->string('thumbnail')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('posts', function($t){
        $t->string('title')->change();
        $t->string('subtitle')->change();
        $t->string('thumbnail')->change();
      });
    }
}
