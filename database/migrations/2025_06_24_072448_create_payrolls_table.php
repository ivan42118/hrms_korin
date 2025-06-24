<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('payrolls', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained()->onDelete('cascade');
            $table->string('periode'); // format: YYYY-MM
            $table->integer('gaji_pokok');
            $table->integer('total_lembur_jam')->default(0);
            $table->integer('upah_lembur_per_jam')->default(17000); // default 17rb/jam
            $table->integer('total_upah_lembur')->default(0);
            $table->integer('total_gaji')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payrolls');
    }
};
