<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courier extends Model
{
    protected $fillable = [
      'name',
      'address',
      'city', 
      'postcode', 
      'country', 
      'registration_code', 
      'VAT', 
      'logo',
      'telephone'
    ];


    public function user(){
      return $this->belongsTo('App\User');
    }

    public function transports(){
      return $this->hasMany(Transport::class);
  }

}
