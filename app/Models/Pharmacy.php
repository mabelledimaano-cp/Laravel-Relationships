<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pharmacy extends Model
{
    use HasFactory;

    public function drugs()
    {
        return $this->belongsToMany(Drug::class);
    }

    public function contracts()
    {
        return $this->hasMany(Contract::class);
    }

    public function works()
    {
        return $this->hasMany(Work::class);
    }
}
