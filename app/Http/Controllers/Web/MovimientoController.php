<?php

namespace App\Http\Controllers\Web;

use App\Movimiento;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Movimientos as MovimientosResource;
use Auth;
use Mail;

class MovimientoController extends Controller
{

    protected $redirectTo = '/inicio';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movimientos = Movimiento::orderBy('id','DESC')->paginate(3);
        return view('web.movimientos', compact('movimientos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        Auth::user()->saldo = 10000;
        if ($request->monto<Auth::user()->saldo)
        {
        $n_mov = new Movimiento;
        $n_mov->cuenta_destino_id = $request->ctadestino;
        $n_mov->monto = $request->monto;
        $n_mov->descripcion = $request->concepto;
        $n_mov->cta_id = Auth::user()->cuenta;
        $n_mov->referencia = mt_rand(100000, 999999);
        $n_mov->status = true;
        $n_mov->local = true;

        Auth::user()->saldo - $request->monto;

        $to_name = Auth::user()->name;
        $to_email = Auth::user()->email;
        $data = array('name'=>$to_name, "body" => "Has realizado un deposito exitosamente.");
    
        Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
        $message->to($to_email, $to_name)
            ->subject('Movimientos en tu cuenta de SP BANK');
        $message->from('sonny.gonzalez.roxtarsoft@gmail.com','SP BANK');
        });

        print ('Mensje enviado');


        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movimiento  $movimiento
     * @return \Illuminate\Http\Response
     */
    public function show(Movimiento $movimiento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movimiento  $movimiento
     * @return \Illuminate\Http\Response
     */
    public function edit(Movimiento $movimiento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movimiento  $movimiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movimiento $movimiento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movimiento  $movimiento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movimiento $movimiento)
    {
        //
    }
}
