<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNews3ColumnToHomePageNews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('home_page_news', function (Blueprint $table) {
            $table->text('news_3')->nullable()->after('news_2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('home_page_news', function (Blueprint $table) {
            $table->dropColumn('news_3');
        });
    }
}
