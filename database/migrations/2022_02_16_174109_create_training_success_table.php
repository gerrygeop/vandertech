<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingSuccessTable extends Migration
{
    public function up()
    {
        Schema::create('training_success', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_partner')->constrained('partners')->onDelete('cascade');
            $table->string('tahun');
            $table->text('layanan_jasa');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('training_success');
    }
}
