<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VaccineRegister extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'vaccine_id',
        'date',
        'user_id'
    ];

    // Relationships

    public function vaccine()
    {
        return $this->hasOne(Vaccine::class);
    }
}
