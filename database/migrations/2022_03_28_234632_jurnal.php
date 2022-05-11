<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jurnal', function (Blueprint $table){
            $table->char('no_jurnal',14);
            $table->text('keterangan');
            $table->date('tgl_jurnal');
            $table->char('no_akun',5);
            $table->integer('debet');
            $table->integer('kredit');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
