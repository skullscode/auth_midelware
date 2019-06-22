<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name', 'description', 'status'];

    public function users(){
        return $this->belongsToMany('App\User')->withTimestamps();
    }

}
