<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTujuanDetailToKunjunganTable extends Migration
{
    public function up()
    {
        Schema::table('kunjungan', function (Blueprint $table) {
            $table->text('tujuan_detail')->nullable();
        });
    }

    public function down()
    {
        Schema::table('kunjungan', function (Blueprint $table) {
            $table->dropColumn('tujuan_detail');
        });
    }
}
