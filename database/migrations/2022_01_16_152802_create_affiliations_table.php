<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAffiliationsTable extends Migration
{
    public function up()
    {
        Schema::create('affiliations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('logo_path');
            $table->text('description');
            $table->text('address')->nullable();
            $table->string('telp')->nullable();
            $table->string('email')->nullable();
            $table->text('maps')->nullable();
            $table->boolean('hidden')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('affiliations');
    }
}
