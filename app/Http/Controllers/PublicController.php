<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Movimiento;
use Auth;
use Illuminate\Support\Facades\Input;

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
        $movimientos = Movimiento::select('id','monto','descripcion','fecha')->where('cuenta_id',2)->get()->toArray();

        return $movimientos;//new MovimientosResource($movimientos);
     }

     public function makePayment(Request $request)
     {
       $data = Input::all();
       $movimiento = new movimiento();
       $movimiento->cuenta_id = $data['ctaorigen'];
       $movimiento->cuenta_destino_id = $data['ctadestino'];
       $movimiento->monto= (float)$data['monto'];
       $movimiento->descripcion = $data['detalle'];
       $movimiento->slug = "slug";
       $movimiento->fecha =  date('Y-m-d');
       $movimiento->status =  True;
       $movimiento->referencia = "";
       $movimiento->save();
       $movimiento->create();
       $id = $movimiento->id;

       $response = collect(["status"=>"success","ref_code"=>$id]);

       return $response;//new MovimientosResource($movimientos);
      }
}
