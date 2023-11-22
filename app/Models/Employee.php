<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['shift_start', 'shift_end'];

    protected $casts = [
        'shift_start' => 'datetime',
        'shift_end' => 'datetime',
    ];

    public function pharmacy()
    {
        return $this->belongsTo(Pharmacy::class);
    }
}
