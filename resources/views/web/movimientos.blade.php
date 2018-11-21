@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="col-md-8 col-md-offset-2">
      <h1>Lista de movimientos</h1>

      @foreach($movimientos as $movimiento)
      <div class="panel panel-default">
        <div class="panel-headnig">
          {{ $movimiento->monto}}
        </div>
      </div>
      @endforeach
    {{$movimientos->render()}}
    </div>
  </div>
@endsection
