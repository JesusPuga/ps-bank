<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
  protected $fillable = [
      'slug', 'cliente_id', 'cliente_destino_id', 'monto', 'fecha', 'referencia', 'status', 
  ];

  public function cliente(){
    return $this->belongsTo('App\Cliente');
  }
}
