<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Establishment extends Model
{
    use HasFactory;

    public $guarded = [];
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function impatto(){
        return (($this->kwh * 0.94) + ($this->mc_gas * 1.8) + ($this->km_dipendenti * 0.135) + ($this->km_aziendali * 0.160))/1000;
    }
}
