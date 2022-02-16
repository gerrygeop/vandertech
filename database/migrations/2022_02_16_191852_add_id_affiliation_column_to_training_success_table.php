<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdAffiliationColumnToTrainingSuccessTable extends Migration
{
    public function up()
    {
        Schema::table('training_success', function (Blueprint $table) {
            $table->foreignId('id_affiliation')->constrained('affiliations')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('training_success', function (Blueprint $table) {
            $table->dropColumn('id_affiliation');
        });
    }
}
