@extends('layouts.app')

@section('content')
  <div class="container">
    <h1 id="saldo">Saldo: </h1>
    <div class="col-md-12" align="center">
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
          <tfoot>
						<tr>
              <th>Id</th>
              <th>Monto</th>
              <th>Descripción</th>
              <th>Fecha</th>
						</tr>
					</tfoot>
        </table>
    </div>
  </div>
  <script>
  const id = {{$userId}}
  </script>
  <script src="{{ asset('js/movimientosTable.js')}}" defer></script>
@endsection
