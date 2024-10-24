<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKunjunganTable extends Migration
{
    public function up()
{
    Schema::create('kunjungan', function (Blueprint $table) {
        $table->id();
        $table->string('tujuan');
        $table->text('tujuan_detail');
        $table->text('komentar');
        $table->date('tanggal')->default(DB::raw('CURRENT_DATE')); 
        $table->timestamps();
    });
}

    public function down()
    {
        Schema::dropIfExists('kunjungan');
    }
}
