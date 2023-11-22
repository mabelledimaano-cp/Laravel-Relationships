<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    use HasFactory;

    public function drugManufacturer()
    {
        return $this->belongsTo(DrugManufacturer::class);
    }

    public function pharmacies()
    {
        return $this->belongsToMany(Pharmacy::class);
    }

    public function prescriptions()
    {
        return $this->hasMany(Prescription::class);
    }
}
