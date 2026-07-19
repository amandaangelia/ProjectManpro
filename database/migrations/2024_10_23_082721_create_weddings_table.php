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
        Schema::create('weddings', function (Blueprint $table) {
            $table->id();
            $table->text('namaP');
            $table->text('alamatP');
            $table->bigInteger('noHpP');
            $table->text('tempatLahirP');
            $table->date('tanggalLahirP');
            $table->text('gerejaP');
            $table->boolean('menikahP');
            
            $table->text('namaL');
            $table->text('alamatL');
            $table->bigInteger('noHpL');
            $table->text('tempatLahirL');
            $table->date('tanggalLahirL');
            $table->text('gerejaL');
            $table->boolean('menikahL');

            $table->date('tanggalPernikahan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wedings');
    }
};
