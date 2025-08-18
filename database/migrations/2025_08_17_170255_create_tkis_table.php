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
        Schema::create('tkis', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nik', 20)->unique();
            $table->enum('gender', ['L', 'P']);
            $table->string('place_of_birth', 100);
            $table->date('date_of_birth');
            $table->string('address_vilage', 50);
            $table->string('district', 100);
            $table->enum('education', ['SD', 'SMP', 'SMA', 'SLTP', 'SLTA', 'AK1'])->default('AK1');
            $table->string('phone', 20)->nullable();
            $table->foreignId('compani_id')->constrained('companis')->onDelete('cascade');
            $table->foreignId('destination_id')->constrained('destinations')->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tkis');
    }
};
