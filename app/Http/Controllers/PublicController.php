<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Movimiento;
use App\Cuenta;
use Auth;
use Illuminate\Support\Facades\Input;
use GuzzleHttp\Client;

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
    public function getClientes(Request $request)
    {
        $data = Input::all();
        $clientes = User::select('id','name','email')->where('id','<>',$data['id'])->get()->toArray();

        return $clientes;//new MovimientosResource($movimientos);
    }

    public function movimientos(Request $request)
    {
        $data = Input::all();
        $cuenta = Cuenta::where("cliente_id","=",$data['id'])->firstOrFail();
        $user = User::where("id","=",$data['id'])->firstOrFail();
        $movimientos;

        if($user->isAdmin()){
          $movimientos = Movimiento::select('id','monto','descripcion','fecha')
                                   ->where('local',"=",False)->get()->toArray();
        }else{
          $movimientos = Movimiento::select('id','monto','descripcion','fecha')->where('cuenta_id',$cuenta->codigo_cuenta)->get()->toArray();

        }
        $newMovimientos['movimientos'] =$movimientos;
        $newMovimientos['saldo'] = $cuenta->saldo;

        return $newMovimientos;//new MovimientosResource($movimientos);
     }

     private function savePayment($data,$isLocal){
       $movimiento = new movimiento();
       $movimiento->cuenta_id = $data['ctaorigen'];
       $movimiento->cuenta_destino_id = $data['ctadestino'];
       $movimiento->monto= (float)$data['monto'];
       $movimiento->descripcion = $data['detalle'];
       $movimiento->fecha =  date('Y-m-d');
       $movimiento->status =  True;
       $movimiento->status =  $isLocal;
       $movimiento->referencia = "";
       $movimiento->save();
       //$movimiento->create();
       $id = $movimiento->id;
       return $id;
     }

     public function getExisitsCuentaId(Request $request){
       $data = Input::all();

       if($this->existsCuentaId($data['cuentaid'])){
         $this->savePayment($data,False);
         $cuentaOrigen = Cuenta::where('codigo_cuenta',$data['cuentaid'])->first();
         $cuentaOrigen->saldo = ($data['tipo'] == "pagar") ? $cuentaOrigen->saldo - (float)$data['monto'] :
                                                             $cuentaOrigen->saldo + (float)$data['monto'];
         $cuentaOrigen->save();
          return "yes";
       }
       return "not";
     }

     public function existsCuentaId($cuentaId){
       $cuenta = Cuenta::where('codigo_cuenta',$cuentaId)->first();

       if(!$cuenta){
        return False;
       }

       return True;
     }

     public function example(Request $request){
       return "yes";
     }

     public function askForCuentaId($data,$cuentaToCheck){
       //post to other bank
       //send cuentaId,cuenteDestino monto, description
       $newData["tipo"] = ($cuentaToCheck == "ctaorigen")?"pagar":"recibir";
       $newData["cuentaid"] = $data[$cuentaToCheck];
       $newData["ctaorigen"] = $data['ctaorigen'];
       $newData["ctadestino"] = $data["ctadestino"];
       $newData["monto"] = $data["monto"];
       $newData["detalle"] = $data["detalle"];
       //example of post with reqres(page to make fake REST operations)
       $client = new Client(['base_uri' => 'https://bancagzz.herokuapp.com/api', 'timeout'  => 2.0]);
       $response = $client->request('GET', 'getExisitsCuentaId',$newData);
       $body = $response->getBody();
       $status = True;

       if($body == "no"){
         $status = False;
       }

       return $status;
     }

     private function checkParameters($data)
     {
       $errors = "";

       if(!array_key_exists('ctaorigen',$data)){
           $errors .= "ctaorigen (missing key)";
       }
       if(!array_key_exists('ctadestino',$data)){
           $errors .= " ctadestino (missing key)";
       }
       if(!array_key_exists('monto',$data)){
           $errors .= " monto (missing key)";
       }else{
         if(!ctype_digit($data['monto'])) {
           $errors .= " monto (must be and integer number)";
         }
       }
       if(!array_key_exists('detalle',$data)){
           $errors .= " detalle (missing key)";
       }
       return $errors;
     }

     public function checkBanksProcess($data){
        $errors = "";
        $statusCtaOrigen = $this->existsCuentaId($data["ctaorigen"]);
        $statusCtaDestino = $this->existsCuentaId($data["ctadestino"]);

        if($statusCtaOrigen  == False && $statusCtaDestino  == False){
          $errors .= "The ctaOrigen and ctaDestino do not exist";
        }
        else if($statusCtaOrigen  == True && $statusCtaDestino  == True){
          return $errors;
        }
        else if($statusCtaOrigen  == False ){
          $status = $this->askForCuentaId($data,'ctaorigen');

          if(!$status){
            $errors .= "ctaOrigen not found";
          }else{
            $errors .= "ctaOrigen";
          }
        }else{
          $status = $this->askForCuentaId($data,'ctadestino');

          if(!$status){
            $errors .= "ctaDestino not found";
          }else{
            $errors .= "ctaDestino";
          }
        }
        return $errors;
     }

     public function isEnoughSaldo($cuentaOrigen,$monto){
       $cuenta = Cuenta::where('codigo_cuenta',$cuentaOrigen)->first();

       if($cuenta->saldo <= $monto){
         return False;
       }
       return True;
     }

     public function makePayment(Request $request)
     {
       $data = Input::all();
       $errors = $this->checkParameters($data);
       $response;

       if($errors == ""){
         $errors = $this->isEnoughSaldo($data['ctaorigen'], $data['monto']);
         $errors = $this->checkBanksProcess($data);

         if($errors == "ctaOrigen" || $errors == "ctaDestino"){
           $id = $this->savePayment($data,False);
           $response = collect(["status"=>"success","ref_code"=>$id]);
         }else if($errors == ""){
           $id = $this->savePayment($data,True);
           $cuentaOrigen = Cuenta::where('codigo_cuenta',$data['ctaorigen'])->first();
           $cuentaOrigen->saldo = $cuentaOrigen->saldo - (float)$data['monto'];
           $cuentaOrigen->save();

           $cuentaDestino = Cuenta::where('codigo_cuenta',$data['ctadestino'])->first();
           $cuentaDestino->saldo = $cuentaDestino->saldo + (float)$data['monto'];
           $cuentaDestino->save();
           $response = collect(["status"=>"success","ref_code"=>$id]);
         }else{
           $response = collect(["status"=>"error","ref_code"=>$errors]);
         }
       }else{
         $response = collect(["status"=>"error","ref_code"=>$errors]);
       }
       return $response;
      }
}
