<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'   
    ];

    public function parent()
{
    return $this->belongsTo('App\Models\Groupe', 'groupe_id');
}

public function child()
{
    return $this->hasMany('App\Models\Groupe', 'groupe_id');
}


public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
