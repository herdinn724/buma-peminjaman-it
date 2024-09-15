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
        Schema::create('peminjamans', function (Blueprint $table) {
            $table->id();
            $table->varchar('nama');
            $table->bigint('nik');
            $table->bigint('notelpon');
            $table->enum('departemen', ['SHE','HR','FINANCE','LOGISTIK','PLANT','FS','IER','IT','ENG','MCD','BE','PRD','LCD']);
            $table->varchar('perangkat');
            $table->varchar('serialnumberhs');
            $table->varchar('keperluan');
            $table->timestamps();
            $table->date('akhirpinjam');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjamen');
    }
};
