$(document).ready(function(){

    $('.modal-trigger').leanModal();
     $('#table_id,#tblCobros').DataTable( {
        "info":     false,
        "pagingType": "full_numbers",
        "lengthMenu":  [[10,-1], [10,"Todo"]] ,
        "language": {
            "emptyTable": "No hay datos disponibles en la tabla",
            "lengthMenu": '_MENU_ ',
            "search": '<i style="color: #1F0A71;font-size: 32px;" class="material-icons">search</i>',
            "loadingRecords": "",
            "paginate": {
                "first":      "Primera",
                "last":       "Última ",
                "next":       "Anterior",
                "previous":   "Siguiente"
            }
        },
    });
});
function editarUsuario(id,estado)
{
	//alert("el estado es: "+estado);
	switch(estado) {
    case '0':
  		$("#mensaje").html("¿Desea dar de baja a este usuario?");
        break;    
    case '1':
        $("#mensaje").html("¿Desea habilitar a este usuario?");
        break;   
	}
  $('#modaleditar').openModal();

  $("#ok").click(function(){
	//alert("entro a ajax");
  $.ajax({
            url: "EditUsuarios/"+id+"/"+estado,
            type: "post",
            async:true,
            success: function(json){
                 $(location).attr('href',"Usuarios","refresh");
            }
        });
	});
}
function crearUsuario()
{
        var texto  = document.getElementById("usuario1").value;
        var texto2 = document.getElementById("tipoUser").value;       
        var texto3 = document.getElementById("pass").value; 
        var texto4 = document.getElementById("pass2").value;   
      if (/^\s*$/.test(texto))
      {alert("Ingrese un usuario");texto.focus();return false;}
      if (/^\s*$/.test(texto4))
      { alert("Ingrese un ID, este debe coincidir con el biometrico");texto4.focus();return false;}     
      if (/^\s*$/.test(texto2))
      {alert("Ingrese una contraseña");return false;}
      if (/^\s*$/.test(texto3))
      {alert("Ingrese un Rol");return false;}
      if (texto3.length<8) 
      {alert("La contraseña debe tener al menos 8 caracteres");return false;
      }
      if (texto3!=texto4) 
        {alert("Las contraseñas no coinciden");return false;}
      else  
      { document.getElementById("frmUsuario").submit();}
}

function detalleCobro(id)
{

  var form_data = {
      name: id
    };
   $.ajax({
      url: "getDetalle2",
      type: 'POST',
      dataType: 'json',
      data: form_data,
        success:function(datos){
                $.each(datos, function(key, val) 
                {
                  $("#NoRecibo").empty();
                  $("#cliente").empty();
                  $("#NoRecibo").append("# "+val.IdRecibo);
                  $("#cliente").append(val.Recibimos);
                });            
        },
    });
    Objtable = $('#tbldetalles').DataTable();
            Objtable.destroy();
            Objtable.clear();
            Objtable.draw();
            $('#tbldetalles').DataTable({
                "order": [[ 3, "desc" ]],
                "searching":false,
                ajax: "getDetalle/"+id,
                "ordering": false,
                "info": false,
                "pagingType": "full_numbers",
                "lengthMenu": [[10, -1], [10, "Todo"]],
                "language": {
                    "emptyTable": "No hay datos disponibles en la tabla",
                    "lengthMenu": '_MENU_ ',
                    "search": '<i class=" material-icons">search</i>',
                    "loadingRecords": "Cargando...",
                    "paginate": {
                        "first": "Primera",
                        "last": "Última ",
                        "next":       "Siguiente",
                        "previous":   "Anterior"
                    }
                },
               columns: [                    
                    { "data": "NFactura" },
                    { "data": "FValor" },
                    { "data": "Descuento" },
                    { "data": "VRecibo" }
              ]
            });
      $('#modalDetalle').openModal();

}