<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTujuanDetailAndKomentarToPengunjungTable extends Migration
{
    public function up()
    {
        Schema::table('pengunjung', function (Blueprint $table) {
            $table->text('tujuan_detail')->nullable();
            $table->text('komentar')->nullable();
        });
    }

    public function down()
    {
        Schema::table('pengunjung', function (Blueprint $table) {
            $table->dropColumn(['tujuan_detail', 'komentar']);
        });
    }
};
