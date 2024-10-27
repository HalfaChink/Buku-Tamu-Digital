<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengunjungTable extends Migration
{
    public function up()
    {
        Schema::create('pengunjung', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('asal');
            $table->string('email');
            $table->string('no_tlp');
            $table->integer('jumlah_pengunjung');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pengunjung');
    }
}
