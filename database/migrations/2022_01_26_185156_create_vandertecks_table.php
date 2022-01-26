<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVandertecksTable extends Migration
{
    public function up()
    {
        Schema::create('vandertecks', function (Blueprint $table) {
            $table->id();
            $table->text('about')->nullable();
            $table->text('visi')->nullable();
            $table->text('misi')->nullable();
            $table->string('image_path');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vandertecks');
    }
}
