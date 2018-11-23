$.ajax({
   url: "/api/usuarioMovimientos",
   success: function(response){
     console.log(response);
     var newData = [];

     for(var elem in response){
       var movimiento = response[elem];
       cols = [movimiento['id'],movimiento['monto'],movimiento['descripcion'],movimiento['fecha']];
       newData.push(cols);
     }

     console.log(newData);
     $('#movimientos').DataTable({
       data:newData
     });
   }
 });
