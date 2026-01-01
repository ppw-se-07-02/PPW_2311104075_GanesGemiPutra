<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('donasis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('anak_id')->nullable()->constrained('anaks')->nullOnDelete();
            $table->string('nama_donatur');
            $table->string('email')->nullable();
            $table->string('no_hp')->nullable();
            $table->decimal('jumlah', 12, 2);
            $table->string('metode')->nullable(); // transfer/e-wallet/dll
            $table->text('pesan')->nullable();
            $table->enum('status', ['pending','paid','failed'])->default('pending');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('donasis');
    }
};
