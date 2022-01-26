<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTrainingColumnToAffiliationsTable extends Migration
{
    public function up()
    {
        Schema::table('affiliations', function (Blueprint $table) {
            $table->string('training_name')->nullable()->after('description');
            $table->text('training')->nullable()->after('training_name');
            $table->text('visi')->nullable()->after('training');
            $table->text('misi')->nullable()->after('visi');
            $table->integer('order')->nullable();
        });

        Schema::table('categories', function (Blueprint $table) {
            $table->integer('order')->nullable();
        });

        Schema::table('photos', function (Blueprint $table) {
            $table->integer('is_show')->nullable();
            $table->integer('for_homepage')->nullable();
        });
    }

    public function down()
    {
        Schema::table('affiliations', function (Blueprint $table) {
            $table->dropColumn('training_name');
            $table->dropColumn('training');
            $table->dropColumn('visi');
            $table->dropColumn('misi');
            $table->dropColumn('order');
        });
        Schema::table('categories', function (Blueprint $table) {
            $table->dropColumn('order');
        });
        Schema::table('photos', function (Blueprint $table) {
            $table->dropColumn('is_show');
            $table->dropColumn('for_homepage');
        });
    }
}
