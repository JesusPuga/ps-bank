<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Movimiento;
use Auth;

class PublicController extends Controller
{
    public function initial(){
      return view('index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getClientes()
    {
        $userId = Auth::id();
        $clientes = User::select('id','name','email')->where('id','<>',$userId)->get()->toArray();

        return $clientes;//new MovimientosResource($movimientos);
    }

    public function usuarioMovimientos()
    {
        $userId = Auth::id();
        $movimientos = Movimiento::select('id','monto','descripcion','fecha')->where('cliente_id',2)->get()->toArray();

        return $movimientos;//new MovimientosResource($movimientos);
     }
}
