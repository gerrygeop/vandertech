<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFeaturedImageIdColumnToAffiliationsTable extends Migration
{
    public function up()
    {
        Schema::table('affiliations', function (Blueprint $table) {
            $table->foreignId('featured_image_id')->index()->after('id')->nullable();
        });
    }

    public function down()
    {
        Schema::table('affiliations', function (Blueprint $table) {
            $table->dropColumn('featured_image_id');
        });
    }
}
