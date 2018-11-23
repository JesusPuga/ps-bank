@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="col-md-8 col-md-offset-2">
      <h1>Lista de movimientos</h1>
        <table id="movimientos" class="display" style="width:100%">
          <thead>
              <tr>
                  <th>Id</th>
                  <th>Monto</th>
                  <th>Descripción</th>
                  <th>Fecha</th>
              </tr>
          </thead>
        </table>
        @foreach($movimientos as $movimiento)
      <div class="panel panel-default">
        <div class="panel-headnig">
          {{ $movimiento->monto}}
        </div>
      </div>
      @endforeach
    </div>
  </div>
  <script src="{{ asset('js/movimientosTable.js')}}"></script>
@endsection
