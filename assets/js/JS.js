$(document).ready(function(){
  //METODO PARA AGREGAR LA CLASE ACTIVE AL MENU DE REPORTES
    $('#menur').find('li').click(function(){
     $('#menur').find('li').removeClass('active');
      $(this).addClass('active'); CargarReportes(this.id);
    });

    function CargarReportes(TipoReporte){
   
     var ruta = $("#ruta option:selected").text();
     var f1 = $("#f1").val();
     var f2 = $("#f2").val();
     if (f1 == ""){f1 = 0;}
     if (f2 == ""){f2 = 0;}
      $("#buscar").click(function(){
           $('.progress').show("slow");
        var data,
                tableName= '#tblReporte',
                columns,
                str,
                jqxhr = $.ajax('ajaxReportes/'+TipoReporte+'/'+ruta+'/'+f1+'/'+f2)
                        .done(function () {
                            data = JSON.parse(jqxhr.responseText);
                  /*elimino las columnas para que las dibuje ajax de nuevo*/
                  if ($.fn.dataTable.isDataTable('#tblReporte')) {
                      $('#tblReporte').DataTable().destroy();      
                      var x = $("#tblReporte > tbody > tr:first > td").length;
                      for (var i = 0; i < x; i++) {
                        $('#tblReporte thead').find('th:eq('+i+')').remove();
                      };
                      for (var i = 0; i < x-3; i++) {
                        $('#tblReporte thead').find('th:eq(0)').remove();
                      };                      
                   }
                // Iterate each column and print table headers for Datatables
                $.each(data.columns, function (k, colObj) {
                    str = '<th>' + colObj.name + '</th>';
                    $(str).appendTo(tableName+'>thead>tr');
                });
                // Add some Render transformations to Columns
                data.columns[0].render = function (data, type, row) {
                    return data;
                }
                // Debug? console.log(data.columns[0]);
                /*verifico que si ya esta inicializada la tabla y la destruyo*/               
                $(tableName).dataTable({
                    "data": data.data,
                    "columns": data.columns,
                    "fnInitComplete": function () {
                    // Event handler to be fired when rendering is complete (Turn off Loading gif for example)
                    console.log('Datatable rendering complete');
                    }
                });
            })
            .fail(function (jqXHR, exception) {
                            var msg = '';
                            if (jqXHR.status === 0) {
                                msg = 'Not connect.\n Verify Network.';
                            } else if (jqXHR.status == 404) {
                                msg = 'Requested page not found. [404]';
                            } else if (jqXHR.status == 500) {
                                msg = 'Internal Server Error [500].';
                            } else if (exception === 'parsererror') {
                                msg = 'Requested JSON parse failed.';
                            } else if (exception === 'timeout') {
                                msg = 'Time out error.';
                            } else if (exception === 'abort') {
                                msg = 'Ajax request aborted.';
                            } else {
                                msg = 'Uncaught Error.\n' + jqXHR.responseText;
                            }
                console.log(msg);
            });
  $('.progress').hide("slow");

 });
}
  $('.datepicker').pickadate({ 
      selectMonths: true, // Creates a dropdown to control month
        selectYears: 8, // Creates a dropdown of 15 years to control year
        format: 'dd-mm-yyyy',// Formats
        monthsFull: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthsShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
        weekdaysFull: ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'],
        weekdaysShort: ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'],
        showMonthsShort: undefined,
        showWeekdaysFull: undefined,
        weekdaysLetter: [ 'D', 'L', 'M', 'M', 'J', 'V', 'S' ],
        today: 'Hoy',
        clear: 'Borrar',
        close: 'CERRAR'  
      });

$(".dropdown-button").dropdown();
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
    $( "#tipoUser" ).change(function() {
     if(this.value==4){
        $('.grupoOculto').show();
      }
      else{
       $('.grupoOculto').hide(); 
      }
    });
    $("#closeGrupo").click(function(){
        $('#modalAddGrupo').closeModal();
    });
$("#closeUser").click(function(){
      $('#modal1').closeModal();
  });

});


function updateEstadoPedido(estado,idPedido)
{
  $('#modalConfirmar').openModal();
  $("#okPedido").click(function(){

  $('.progress').show("slow");
     $.ajax({
            url: "../ajaxUpdatePedido/"+estado+"/"+idPedido,
            type: "get",
            async:true,
            success: function(json){
                $(location).attr('href','../pedido');
            }
        });
    });
}
// Add event listener for opening and closing details
    $('#tblReporte').on('click', 'tbody .detalle', function () {     
      var table = $('#tblReporte').DataTable();
        var tr = $(this).closest('tr');
        var row = table.row(tr);
        var data = table.row( $(this).parents('tr') ).data();
        var pedido=data.hola2.split('">');
        var pedido=pedido[1].split('</a>')
        //alert (pedido[0]);

        if (row.child.isShown()) {// This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        } else {// Open this row
            $('.progress').show("slow");
            format(row.child,pedido[0]);
            tr.addClass('shown');
            $('.progress').hide("slow");
        }           
    });

function format(callback,noPedido) {
  //alert(noPedido);

  var ia=0;
        $.ajax({
        url:'ajaxReportes2/'+noPedido,
        dataType: "json",
        complete: function (response) {
            var data = JSON.parse(response.responseText);
            console.log(data);
                var thead = '',  tbody = '';
                for (var key in data) {
                    thead += '<th class="negra center">ARTICULO</th>';
                    thead += '<th class="negra center">DESCRIPCION</th>';
                    thead += '<th class="negra center">CANTIDAD</th>';
                    thead += '<th class="negra center">PRECIO</th>';
                }
                $.each(data, function (i, d) {
                  $.each(d, function (a, b) {
                     ia++;
                  });
                    for (var x=0; x<ia; x++) {
                    tbody += '<tr>' +
                              '<td>' + d[x]["hola3"] + '</td>'+
                              '<td class="negra">' + d[x]["hola4"] + '</td>'+
                              '<td>' + d[x]["hola5"] + '</td>'+
                              '<td>' + d[x]["hola6"] + '</td>'+
                              '</tr>';
                      }                   
                });
            //console.log('<table>' + thead + tbody + '</table>');
            callback($('<table id="tblReportDetalles">' + thead + tbody + '</table>')).show();
        },
        error: function () {
            $('#output').html('Bum: hubo un error al cargar los detalles!');
        }
    });
  }

function crearGrupo(){
  $('#aceptarGrupo').hide();
  $('#progresGrupo').show();
var nombreGrupo = $('#nombreGrupo').val();
var nombreEncargado =$( "#JefeGrupo option:selected").val();
if (nombreEncargado != "" && nombreGrupo !="") {
  var form_data = {
      nombreEncargado: $('#JefeGrupo').val(),
      nombreGrupo: $('#nombreGrupo').val()
    };
$.ajax({
            url: "ajaxCrearGrupos",
            type: "post",
            data: form_data,
            async:true,
            success: function(json){
                $.ajax({
                      url: "getGrupos",
                      type: 'POST',
                      dataType: 'json',
                      success: function(msg)
                      {
                        var sc='';
                        $.each(msg, function(key, val) 
                        {
                         sc+='<option value="'+val.IdGrupo+'">'+val.NombreGrupo+'</option>';
                       });
                        $("#selectGrupos option").remove();
                        $("#selectGrupos").append(sc);               
                      }
                    });  

                  alert("Grupo creado correctamente");
                  $('#progresGrupo').hide();
                  $('#aceptarGrupo').show(); 
                  $('#modalAddGrupo').closeModal();
            }
        });}
else {alert("Por favor complete todos los datos del grupo");$('#aceptarGrupo').show();$('#progresGrupo').hide();}
}
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
 $("#okpass").click(function(){
    if ($("#passactual2").val()!=$("#passactual").val()) {alert("Contraseña Actual Incorrecta");$("#passactual").focus();return false;}
    if ($("#passactual").val()=="") {alert("Digite Su Contraseña Actual");$("#passactual").focus();return false;}
    if ($("#pass1").val()=="") {alert("Ingrese La Nueva Contraseña");$("#pass1").focus();return false;}
    if ($("#pass2").val()=="") {alert("Repita La Nueva Contraseña");$("#pass2").focus();return false;}
    if ($("#pass2").val()!=$("#pass1").val()) {alert("Las Contraseñas No Coinciden");$("#pass2").focus();return false;}
    if ($("#pass1").val().length<8) {alert("La Contraseña Debe tener Al Menos 8 caracteres");$("#pass1").focus();return false;}
    else{
    document.getElementById("ekisde").submit();
    }
  });

function crearUsuario()
{
      var texto  = document.getElementById("usuario1").value;
      var texto2 = $("#tipoUser option:selected").text();
      var texto3 = document.getElementById("pass").value; 
      var texto4 = document.getElementById("cuatro").value;
      if (/^\s*$/.test(texto))
      {alert("Ingrese un usuario");texto.focus();return false;}         
      if (/^\s*$/.test(texto2))
      {alert("Seleccione el rol");return false;}
      if (texto3=="")
      {alert("Ingrese la primera contraseña");return false;}

      /*if (texto4=="")
      { alert("Ingrese la segunda contraseña");return false;}  */

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

function detallePedido(id)
{
  window.open('detallepedido/'+id, '_blank');   
}