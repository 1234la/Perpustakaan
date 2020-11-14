<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul', 50)->nullable();
            $table->string('pengarang', 50)->nullable();
            $table->string('penerbit',50)->nullable();
            $table->string('tahun',10)->nullable();
            $table->string('isbn',20)->nullable();
            $table->enum('letak', ['rak1','rak2','rak3','rak4','rak5'])->nullable();
            $table->integer('jumlah')->nullable();
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
        Schema::dropIfExists('bukus');
    }
}
