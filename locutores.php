<?php
include("modelo.php");
$obj = new modelo(); 

$listarLocutores=$obj->listarLocutores();
$listarpopChart=$obj->listarpopChart();

$activelocutor="";
$activelocutor="active";
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
		        <p>LOCUTORES</p>
		    </div>
		    <div class="titulo-blanco text-center">¿Ya conoces a todos nuestros integrantes de PopFm?</div>
		    
        </div>
      </div>

    </div>
  </section><!-- End Hero -->
  <div class="container">
  	
<?php
foreach ($listarLocutores as $listarLocutores) {
	$listaProgramasxLocutor=$obj->listaProgramasxLocutor($listarLocutores['ID']);

?>
<div id="divPrincipal" onclick="verinfoLocutor('<?=$listarLocutores['ID']?>')" class="row justify-content-center cursos-pointer">
  		<div class="col-10 col-sm-10 col-md-3 col-lg-3 col-xl-3 col-xxl-3 padding-bottom-5">
  			<img class="img-fluid" src="Admin/public/<?=$listarLocutores['imagen_dos']?>">
  		</div>
</div>
<div id="div_<?=$listarLocutores['ID']?>" style="display: none;">
<div class="row justify-content-center">
	<div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10 texto-gris padding-bottom-5 text-center ">
		<?=$listarLocutores['descripcion']?>
	</div>
</div>
<?php

foreach ($listaProgramasxLocutor as $listaProgramasxLocutor) {

	$datosPrograma=$obj->datosPrograma($listaProgramasxLocutor['id_programa']);
	$datoHorainicial=$obj->datoHorainicial($listaProgramasxLocutor['id_programa']);
	$datoHorafinal=$obj->datoHorafinal($listaProgramasxLocutor['id_programa']);
	$datodiaInicial=$obj->datodiaInicial($listaProgramasxLocutor['id_programa']);
	$datodiaFinal=$obj->datodiaFinal($listaProgramasxLocutor['id_programa']);
	
?>
<div class="row padding-bottom-5 justify-content-center">
	<div class="col-12 text-center titulo-amarillo-locutores">
		<?=$datosPrograma['nombre']?>
	</div>
	<div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10 texto-gris text-center padding-bottom-3">
		<?=$datosPrograma['descripcion']?>
	</div>
	<div class="col-10 col-sm-10 col-md-4 col-lg-4 col-xl-4 col-xxl-4 text-center texto-azul-horario">
		<?=strtolower($datodiaInicial)?> - <?=strtolower($datodiaFinal)?>
	</div>
	<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 text-center texto-azul ">
		<span class="texto-azul-horario"><?=$datoHorainicial['horario_inicial']?></span> hrs - <span class="texto-azul-horario"><?=$datoHorafinal['horario_final']?></span> hrs
	</div>
</div>
<?php
}
?>
<div class="row padding-bottom-5">
  		<div onclick="ocultainfoLocutor('<?=$listarLocutores['ID']?>')" class="col-12 text-center cursos-pointer">
  			<img  src="assets/img/ocultar.png">
  			<div class="texto-azul-horario ">Ocultar</div>
  		</div>
  	</div>
</div>
<?php

}
?>
  	
  </div>

  <div class="container">
  	<div class="row justify-content-center">
  		<div class="col-8">
  			<hr class="hr-azul">
  		</div>
  	</div>
  </div>



<?php
include("pop-chart-seccion-interna.php");
include("modales.php");
include("footer.php");
?>
<script type="text/javascript">
	function verinfoLocutor(divid){
		
		//$("#div_"+divid).show();
$( "#div_"+divid ).toggle( "slow", function() {
    // Animation complete.
  });
  




	}
	function ocultainfoLocutor(divid){
		
		$("#div_"+divid).hide("slow", function() {
    // Animation complete.
  });
	}
</script>