<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    public $guarded = [];
    public function establishments()
    {
        return $this->hasMany(Establishment::class);
    }

    public function impattoTotale($id){
        $tot = 0;
        $stabilimenti = Company::find($id)->establishments;
        foreach ($stabilimenti as $stabilimento) {
            $tot += $stabilimento->impatto();
        }
        return $tot;
    }
}
