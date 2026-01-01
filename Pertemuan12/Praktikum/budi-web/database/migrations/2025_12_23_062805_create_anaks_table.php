<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('anaks', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->unsignedTinyInteger('usia')->nullable();
            $table->string('alamat')->nullable();
            $table->text('cerita')->nullable();
            $table->string('foto')->nullable(); // path/filename
            $table->enum('status', ['aktif','terbantu'])->default('aktif');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('anaks');
    }
};
