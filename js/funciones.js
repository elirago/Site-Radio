function ajaxApp(divDestino, url, parametros, metodo) {
  $("#"+divDestino).show().html('<div style="    text-align: center;"><img src="gif.gif" style="width: 25%; height: 25%;"></div>'); 
    $.ajaxSetup({
        cache: false
    });
    $.ajax({ 
        async: true,
        type: metodo,
        dataType: "html",
        contentType: "application/x-www-form-urlencoded",
        url: url,
        data: parametros,
        success: function(datos) { 
           
            $("#" + divDestino).show().html(datos);
        },
        timeout: 90000000,
        error: function() {
        alert ("Refresca tu pagina y tu sesión");
            $("#" + divDestino).show().html('<center>Error: El servidor no responde. <br>Por favor intente mas tarde. </center>');
        }
    });
}
function ajaxAppimg(divDestino, url, parametros, metodo) {
  $("#"+divDestino).show().html('<div style="text-align:center;"><img src="gif.gif" ></div>'); 
    $.ajaxSetup({
        cache: false
    });
    $.ajax({
        async: true,
        type: metodo,
        contentType: false,
        processData: false,
        url: url,
        data: parametros,
        success: function(datos) { 
           
            $("#" + divDestino).show().html(datos);
        },
        timeout: 90000000,
        error: function() {
            $("#" + divDestino).show().html('<center>Error: El servidor no responde. <br>Por favor intente mas tarde. </center>');
        }
    });
}


function listarProgramacion(idDia){


  //var idCiudad=$("#selectCiudad").val();
  var idCiudad=$("#valorCiudad").val();

  

$("#btndia_"+idDia).addClass("bg-active");
for (var i = 1; i < 8; i++) {
  if (i==idDia) {
    $("#btndia_"+i).addClass("bg-active");
    $("#btndia_"+i).removeClass("bg-inactivo");
  }else{
    $("#btndia_"+i).removeClass("bg-active");
    $("#btndia_"+i).addClass("bg-inactivo");
  }
}
  
    parametros = "action=listarProgramacion&idDia="+idDia+"&idCiudad="+idCiudad;
    div = "contenedor";
    url = "acciones.php";
    metodo = "POST";
    
    ajaxApp(div, url, parametros, metodo);

}

function listarProgramacionMovil(){
 //var idCiudad=$("#selectCiudad").val();
 var idCiudad=$("#valorCiudad").val();

var selectDiasmovil=$("#selectDiasmovil2").val();

  
    parametros = "action=listarProgramacionMovil&idDia="+selectDiasmovil+"&idCiudad="+idCiudad;
    
    div = "contenedorMovil";
    url = "acciones.php";
    metodo = "POST";
    ajaxApp(div, url, parametros, metodo);

}
function mostrarHeroPrincipal(){
  //var idCiudad=$("#selectCiudad").val();
  
  var idCiudad=$("#valorCiudad").val();

    parametros = "action=mostrarHeroPrincipal&idCiudad="+idCiudad;
    
    div = "divHeroPrincipal";
    url = "acciones.php";
    metodo = "POST";
    ajaxApp(div, url, parametros, metodo);

}

function cambiaCiudad(link,path,idDia){


  var idCiudad=$("#selectCiudad").val();
  var valorCiudad=$("#valorCiudad").val(idCiudad);

  window.location.href = path+link+'?reference='+idCiudad;

  //listarProgramacionMovil();
  //listarProgramacion(idDia);
  //mostrarHeroPrincipal();
  //mostrarStreaming();
}

function mostrarStreaming(){

var idCiudad=$("#selectCiudad").val();

    parametros = "action=mostrarStreaming&idCiudad="+idCiudad;
    div = "streamingDiv";
    url = "acciones.php";
    metodo = "POST";
    ajaxApp(div, url, parametros, metodo);

}

function verVideoPop(idPopChart){

    parametros = "action=verVideoPop&idPopChart="+idPopChart;
    div = "muestraVideo";
    url = "acciones.php";
    metodo = "POST";
    ajaxApp(div, url, parametros, metodo);

    parametros = "action=verTituloVideoPop&idPopChart="+idPopChart;
    div = "tituloVideo";
    url = "acciones.php";
    metodo = "POST";
    ajaxApp(div, url, parametros, metodo);

}

function votarVideo(idButtom){


  Swal.fire({
  icon: 'success',
  title: '¡Gracias por votar!',
  showConfirmButton: false,
  timer: 3500
})

  $( "#btn_"+idButtom ).addClass( "disabled" );
}

function redireccionarurl(link,path){


  var valorCiudad=$("#valorCiudad").val();
window.location.href = path+link+'?reference='+valorCiudad;
}
 

