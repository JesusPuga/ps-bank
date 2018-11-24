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
  <script src="{{ asset('js/movimientosTable.js')}}" defer></script>
@endsection
