<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('penduduk', function (Blueprint $table) {
            $table->id('id');
            $table->char('nik', 16)->unique();
            $table->char('no_kk', 16);
            $table->string('nama_lengkap', 50);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->enum('agama', [
                'islam',
                'katolik',
                'kristen',
                'hindu',
                'budha',
                'konghucu',
            ]);
            $table->enum('pekerjaan', [
                'petani',
                'pekerja_swasta',
                'peternak',
                'kuli',
                'wirausaha',
                'perangkat_desa',
                'pns',
                'nakes'
            ]);
            $table->enum('pendidikan', [
                'tidak_sekolah',
                'tk',
                'sd',
                'smp',
                'sma',
                'd1',
                'd2',
                'd3',
                's1',
                's2',
                's3',
            ]);
            $table->string('alamat_jalan');
            $table->char('alamat_rt', 3);
            $table->char('alamat_rw', 3);
            $table->string('alamat_provinsi');
            $table->string('alamat_kabupaten');
            $table->string('alamat_kecamatan');
            $table->string('alamat_desa');
            $table->char('kodepos', 5);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penduduk');
    }
};
