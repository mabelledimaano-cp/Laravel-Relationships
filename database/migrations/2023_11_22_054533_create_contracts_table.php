<?php

use App\Models\DrugManufacturer;
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
        Schema::create('contracts', function (Blueprint $table) {
            $table->foreignIdFor(DrugManufacturer::class, 'manufacturer_id')->constrained('drug_manufacturers')->cascadeOnDelete();
            $table->foreignIdFor(Pharmacy::class)->constrained()->cascadeOnDelete();
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contracts');
    }
};
