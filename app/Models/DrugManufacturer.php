<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DrugManufacturer extends Model
{
    use HasFactory;

    public function drugs()
    {
        return $this->hasMany(Drug::class);
    }

    public function contract()
    {
        return $this->hasMany(Contract::class);
    }
}
