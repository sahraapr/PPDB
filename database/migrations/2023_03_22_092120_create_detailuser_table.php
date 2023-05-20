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
        Schema::create('detailuser', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user')->nullable();
            $table->integer('nisn')->nullable();
            $table->enum('jk', ['laki_laki', 'perempuan'])->nullable();
            $table->string('asal_sekolah')->nullable();
            $table->string('nohp', 255)->nullable();
            $table->string('nohp_ayah', 255)->nullable();
            $table->string('nohp_ibu', 255)->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->string('tempat_lahir', 255)->nullable();
            $table->text('alamat', 255)->nullable();
            $table->string('agama', 255)->nullable();
            $table->string('jurusan', 255)->nullable();
            $table->string('nama_ayah', 255)->nullable();
            $table->string('pekerjaan_ayah', 255)->nullable();
            $table->string('penghasilan_ayah', 255)->nullable();
            $table->string('nama_ibu', 255)->nullable();
            $table->string('pekerjaan_ibu', 255)->nullable();
            $table->string('penghasilan_ibu', 255)->nullable();
            $table->string('file', 255)->nullable();
            $table->enum('data', ['Kosong','Tuntas'])->default('Kosong');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detailuser');
    }
};
