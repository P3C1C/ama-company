<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use PharIo\Manifest\AuthorElement;

class Brand extends Model
{
    use HasFactory;

    public $guarded = [];

    public function models()
    {
        return $this->hasMany(Modell::class);
    }

    public function owner()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeOwned($query) {
        return $query->where('owner_id', Auth::id());
    }

    public function userCanEdit() {
        $authUser = Auth::user();

        if($authUser->role == 'admin') {
            return true;
        }

        return $authUser->id == $this->id;
     }
    
}
