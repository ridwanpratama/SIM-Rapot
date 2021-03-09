<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignToUpdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('upd', function (Blueprint $table) {
            $table->foreign('siswa_id')->references('id')->on('siswa');
            $table->foreign('detail_upd_id')->references('id')->on('detail_upd');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('upd', function (Blueprint $table) {
            $table->dropForeign(['siswa_id']);
            $table->dropForeign(['detail_upd_id']);
        });
    }
}