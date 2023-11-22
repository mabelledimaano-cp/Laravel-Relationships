<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pharmacy extends Model
{
    use HasFactory;

    public function drugs()
    {
        return $this->belongsToMany(Drug::class, 'drug_pharmacy')
            ->withPivot('price')
            ->withTimestamps();
    }

    public function contracts()
    {
        return $this->hasMany(Contract::class);
    }


    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}
