<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
  protected $fillable = [
      'slug', 'cuenta', 'telefono',
  ];

  public function cuentas(){
    return $this->hasMany('App\Cuenta');
  }

  public function movimientos(){
    return $this->hasMany('App\Movimiento');
  }
}
