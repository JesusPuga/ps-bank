$(document).ready(function(){
  $.ajax({
     url: "/api/movimientos",
     data:{"id": id},
     type: 'POST',
     success: function(response){
       var newData = [];
       $('#saldo').text("Saldo: $"+response['saldo']);

       for(var elem in response['movimientos']){
         var movimiento = response['movimientos'][elem];

         cols = [movimiento['id'],movimiento['monto'],movimiento['descripcion'],movimiento['fecha']];
         newData.push(cols);
       }

       $('#movimientos').DataTable({
         data:newData,
         dom: 'Bfrtip',
         buttons: ['pdf', 'excel']
       });
    }
   });
});
