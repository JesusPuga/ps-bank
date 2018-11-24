<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
  protected $fillable = [
      'cuenta_id', 'cuenta_destino_id', 'monto', 'fecha', 'referencia', 'status',
  ];

  public function cuenta(){
    return $this->belongsTo('App\Cuenta');
  }
}
