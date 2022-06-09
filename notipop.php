<?php
include("modelo.php");
$obj = new modelo(); 

$listarNotipopCompletas=$obj->listarNotipopCompletas();
$totalNotipop=$obj->totalNotipop();
$activenotipop="";

$activenotipop="active";
$diaAuxiliar="";
$diaAuxiliar=date("w");
include("head.php");
include("menu.php");

?>

<div class="container" style="display: none;">
<div class="row">
  <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
  <img class="img-fluid" src="assets/img/ad-horizontal.png">
</div>
</div>
</div>
<section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container " >
     
      <div class="row justify-content-center" >
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
			<div class="section-title-grande text-center padding-movil-hp">
		        <p>NOTIPOP</p>
		    </div>
        </div>
      </div>

    </div>
  </section><!-- End Hero -->

  <div class="container">
  	<div class="row">
  		
  			<?php
  
  $cantidadMostrar=8;
  $compag         =(int)(!isset($_GET['pag'])) ? 1 : $_GET['pag']; 
  $TotalReg       =$totalNotipop;
	//Se divide la cantidad de registro de la BD con la cantidad a mostrar 
	$TotalRegistro  =ceil($TotalReg/$cantidadMostrar);
	//Consulta SQL
  $totalNotipoplimit=$obj->totalNotipoplimit($compag,$cantidadMostrar);
	
foreach ($totalNotipoplimit as $totalNotipoplimit) {
  $fecha_det0= explode('-',$totalNotipoplimit['fecha_inicio']);


$mesesarray0 = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
$mesActual0=""; 
$mesActual0=$mesesarray0[$fecha_det0[1]-1];
$anioActual0=$fecha_det0[0];
?>
      <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 col-xxl-3 padding-bottom-3">
        <a href="notipop-interna.php?reference=<?=$totalNotipoplimit['ID']?>">
        <div class="card-notipop2" >
          <img src="Admin/public/<?=$totalNotipoplimit['imagen_chica']?>" class="border-redondo-superior img-fluid" >
          <div class="card-body-notipop-interna">
            <p class="card-text"><?=$totalNotipoplimit['titulo']?></p>
            <div class="txt-hora text-end fijo-abajo"> <?=$mesActual0." ".$anioActual0?></div>
          </div>
        </div>
      </a>
      </div>
<?php
}  
?>
</div>
</div>

<div class="text-center">
<?php
	$IncrimentNum =(($compag +1)<=$TotalRegistro)?($compag +1):1;
  $DecrementNum =(($compag -1))<1?1:($compag -1);
  
	echo "<ul class='ul-pag'><li class=\"btn\"><a href=\"?pag=".$DecrementNum."\"><img width='30px' height='30px' src='assets/img/izquierda-arrow.png'></a></li>";
    //Se resta y suma con el numero de pag actual con el cantidad de 
    //numeros  a mostrar
     $Desde=$compag-(ceil($cantidadMostrar/2)-1);
     $Hasta=$compag+(ceil($cantidadMostrar/2)-1);
     
     //Se valida
     $Desde=($Desde<1)?1: $Desde;
     $Hasta=($Hasta<$cantidadMostrar)?$cantidadMostrar:$Hasta;
     //Se muestra los numeros de paginas
     for($i=$Desde; $i<=$Hasta;$i++){
     	//Se valida la paginacion total
     	//de registros
     	if($i<=$TotalRegistro){
     		//Validamos la pag activo
     	  if($i==$compag){
           echo "<li  class=\"active li-pag btn\"><a class=\"a-pag\" href=\"?pag=".$i."\"><span class=\"span-pag\" >".$i."</span></a></li>";
     	  }else {
     	  	echo "<li class=\"btn btn-border\"><a class=\"a-pag\" href=\"?pag=".$i."\"><span class=\"span-pag2\">".$i."</span></a></li>";
     	  }     		
     	}
     }
	echo "<li class=\"btn\"><a class=\"a-pag\" href=\"?pag=".$IncrimentNum."\"><img width='30px' height='30px'  src='assets/img/derecha-arrow.png'></a></li></ul>";
  

?>
  	
  </div>


<?php
include("modales.php");
include("footer.php");
?>