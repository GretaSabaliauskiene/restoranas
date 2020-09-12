<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public $fillable = ['title', 'price', 'weight', 'meat', 'about'];

    public function restourants()
    {
        return $this->hasMany('App\Restourant');
    }
}
