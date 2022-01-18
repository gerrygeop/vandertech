<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSlugColumnToNewsTable extends Migration
{
    public function up()
    {
        Schema::table('news', function (Blueprint $table) {
            $table->string('slug')->after('title');
        });

        Schema::table('affiliations', function (Blueprint $table) {
            $table->string('slug')->after('name');
        });
    }

    public function down()
    {
        Schema::table('news', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
        Schema::table('affiliations', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }
}
