<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
  protected $fillable = [
      'cliente_id', 'slug', 'saldo', 'fecha_apertura', 'fecha_cierre', 'credito', 'debito' ,
  ];

  public function cliente(){
    return $this->belongsTo('App\Cliente');
  }
}
