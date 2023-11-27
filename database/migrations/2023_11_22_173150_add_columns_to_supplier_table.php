<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToSupplierTable extends Migration
{
    public function up()
    {
        Schema::table('supplier', function (Blueprint $table) {
            // Gunakan `change()` untuk mengubah kolom jika sudah ada atau menambahkannya jika belum ada
            $table->string('nama_supplier')->after('id')->nullable()->change();
            $table->string('no_telp_supplier')->after('nama_supplier')->nullable()->change();
            $table->text('alamat_supplier')->after('no_telp_supplier')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('supplier', function (Blueprint $table) {
            // Hapus kolom jika dibutuhkan
            $table->dropColumn(['nama_supplier', 'no_telp_supplier', 'alamat_supplier']);
        });
    }
}
