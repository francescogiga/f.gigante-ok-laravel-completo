<?php

namespace App\Models;

use App\Models\Genre;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

public function movies(){
    return $this->belongsTo(User::class);
}

public function genres()
{
    return $this->belongsToMany(Genre::class);
}

}
