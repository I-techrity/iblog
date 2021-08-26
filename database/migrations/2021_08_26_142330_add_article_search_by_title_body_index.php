<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AddArticleSearchByTitleBodyIndex extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            DB::statement('ALTER TABLE `articles` ADD FULLTEXT INDEX article_search_by_title_body_index(`title`, `body`)');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            DB::statement('ALTER TABLE `articles` DROP INDEX article_search_by_title_body_index');
        });
    }
}
