<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Modell extends Model
{
    use HasFactory;
    public $guarded = [];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function owner()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeOwned($query) {
        return $query->where('owner_id', Auth::user()->id);
    }
}
