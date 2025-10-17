<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('testimoni', function (Blueprint $table) {
            $table->id('id_testimoni');
            $table->string('kode_testimoni')->unique();
            $table->string('nama_testimoni');
            $table->string('jabatan')->nullable();
            $table->text('pesan');
            $table->string('foto')->nullable();
            $table->tinyInteger('rating')->nullable();
            $table->enum('status', ['publik', 'draft'])->default('publik');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('testimoni');
    }
};
