@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="col-md-8 col-md-offset-2">
      <h1>Lista de clientes</h1>
        <table id="clientes" class="display" style="width:100%">
          <thead>
              <tr>
                  <th>Id</th>
                  <th>Nombre</th>
                  <th>Correo</th>
              </tr>
          </thead>
        </table>
    </div>
  </div>
  <script src="{{ asset('js/clientesTable.js')}}" defer></script>
@endsection
