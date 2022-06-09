<?php
include("modelo.php");
$obj = new modelo(); 

$listarGaleriaPrincipal=$obj->listarGaleriaPrincipal();

$totalGaleria=count($listarGaleriaPrincipal);

$activegaleria="";
$activegaleria="active";
$diaAuxiliar="";
$diaAuxiliar=date("w");
include("head.php");
include("menu.php");

?>
<section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container " >
     
      <div class="row justify-content-center" >
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
			<div class="section-title-grande text-center padding-movil-hp">
		        <p>GALERÍA</p>
		    </div>
		    <div class="titulo-blanco text-center">¡Echa un vistazo a nuestros eventos!</div>
        </div>
      </div>

    </div>
  </section><!-- End Hero -->
  <div class="container">
  	<div class="row">
 		
<?php

$cantidadMostrar=6;
  $compag         =(int)(!isset($_GET['pag'])) ? 1 : $_GET['pag']; 
  $TotalReg       =$totalGaleria;
	//Se divide la cantidad de registro de la BD con la cantidad a mostrar 
	$TotalRegistro  =ceil($TotalReg/$cantidadMostrar);
	//Consulta SQL
  $listarGaleriaPrincipallimit=$obj->listarGaleriaPrincipallimit($compag,$cantidadMostrar);
foreach ($listarGaleriaPrincipallimit as $listarGaleriaPrincipallimit) {

?>
  		<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 text-center padding-bottom-3" >
<a href="galeria-interna.php?reference=<?=$listarGaleriaPrincipallimit['ID']?>">
			<figure class="card-galeria">
			<img src="Admin/public/<?=$listarGaleriaPrincipallimit['img_principal']?>" alt="" />
			<figcaption class="">
			  <div class="description-galeria">
			  	
			    <div class="padding-top-25">
			    <?=$listarGaleriaPrincipallimit['titulo']?>
				
			    </div>
			  </div>
			  <div class="title"><?=$listarGaleriaPrincipallimit['titulo']?></div>
			  
			</figcaption>
			</figure>
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