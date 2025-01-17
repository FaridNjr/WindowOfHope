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
        Schema::create('upload', function (Blueprint $table) {
            $table->string('nama');
            $table->string('jenishewan');
            $table->string('umur');
            $table->string('jeniskelain');
            $table->string('vaksin');
            $table->BLOB('file');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('');
    }
};
