$(document).ready(function(){
  $.ajax({
     url: "/api/usuarioMovimientos",
     success: function(response){
       var newData = [];

       for(var elem in response){
         var movimiento = response[elem];
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
