<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        'id', 'name', 'location', 'owner', 'net_worth'
    ];
    
    public function store(){
        return $this->belongsTo('App\Store');
  }
}