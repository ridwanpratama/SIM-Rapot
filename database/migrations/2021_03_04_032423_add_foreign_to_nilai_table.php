<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignToNilaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nilai', function (Blueprint $table) {
            $table->foreign('siswa_id')->references('id')->on('siswa');
            $table->foreign('mapel_id')->references('id')->on('mapel');
            $table->foreign('upd_id')->references('id')->on('upd');
            $table->foreign('absen_id')->references('id')->on('absen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nilai', function (Blueprint $table) {
            $table->dropForeign(['siswa_id']);
            $table->dropForeign(['mapel_id']);
            $table->dropForeign(['absen_id']);
        });
    }
}
