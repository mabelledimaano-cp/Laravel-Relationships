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
        Schema::create('drug_pharmacy', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Drug::class, 'drug_id');
            $table->foreignIdFor(\App\Models\Pharmacy::class, 'pharmacy_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drug_pharmacy');
    }
};
