<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddKategoriToWisataTable extends Migration
{
    public function up()
    {
        Schema::table('wisatas', function (Blueprint $table) {
            $table->string('kategori')->after('deskripsi')->nullable(); // tambahkan setelah deskripsi
        });
    }

    public function down()
    {
        Schema::table('wisatas', function (Blueprint $table) {
            $table->dropColumn('kategori');
        });
    }
}
