$.ajax({
   url: "/api/getClientes",
   data:{"id": id},
   type: 'POST',
   success: function(response){
     var newData = [];

     for(var elem in response){
       var cliente = response[elem];
       cols = [cliente['id'],cliente['name'],cliente['email']];
       newData.push(cols);
     }

     $('#clientes').DataTable({
       data:newData,
       dom: 'Bfrtip',
       buttons: ['pdf', 'excel']
     });
   }
 });
