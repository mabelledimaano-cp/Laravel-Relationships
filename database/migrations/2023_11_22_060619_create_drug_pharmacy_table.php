<?php

use App\Models\Drug;
use App\Models\Pharmacy;
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
            $table->foreignIdFor(Drug::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Pharmacy::class)->constrained()->cascadeOnDelete();
            $table->float('price')->default(0);
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
