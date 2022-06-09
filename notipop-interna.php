<?php
include("modelo.php");
$obj = new modelo(); 
$idNotipop = $_GET['reference'];

$idNotipop = filter_var($idNotipop, FILTER_SANITIZE_NUMBER_INT);
$datosNotipopxid=$obj->datosNotipopxid($idNotipop);
$listaNotipop=$obj->listaNotipop();
$listarnotipopHomexlimit=$obj->listarnotipopHomexlimit('0,4');
$listarpopChart=$obj->listarpopChart();
include("head.php");
include("menu.php");


$urlComparti="";
$urlComparti="https://merakidigital.mx/POP/notipop-interna.php?reference=".$idNotipop."";

?>

<div id="hero-notipop" class="section-notipop d-flex align-items-center justify-content-center">
<div class="container-fluid" >
 
  <div class="row justify-content-center" >
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 padding-bottom-1">
		<div class="section-title-notipop-azul text-center padding-movil-hp">
	        <p><?=$datosNotipopxid['titulo']?></p>
	    </div>
    </div>
  </div>
  <div class="row justify-content-center" >

    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 ceropadding">
    	<img class="img-fluid" src="Admin/public/<?=$datosNotipopxid['imagen_banner']?>">
    </div>
  </div>

</div>
</div><!-- End Hero -->
<div class="bg-white">
<div class="container">
	<div class="row justify-content-center">
		<div class="col-6">
			<div class="bg-white text-end">
				<small><?=$datosNotipopxid['fuente']?></small>
			</div>
		</div>
	</div>
</div>
</div>
<div class="bg-blanco-notipop">
<div class="container">
	<div class="row justify-content-center">
		<div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3 text-center ">
			<img class="img-fluid" src="assets/img/notipop/ad-cuadrado.png">
		</div>
		<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 text-justificado ">
			<?=html_entity_decode($datosNotipopxid['descripcion_larga'])?>
		</div>
		<div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
			<div class="titulo-azul"> NOTIPOP </div>
		  			<div class="fondo-azul padding-5">
<?php
foreach ($listaNotipop as $listaNotipop) {
	
?>
		  				<div class="texto-notipop-blanco" >
		  					<?=$listaNotipop['titulo']?><br>
		  					<a class="texto-blanco a-negro" href="notipop-interna.php?reference=<?=$listaNotipop['ID']?>"> Ver más</a>
		  				</div><hr class="hr-blanco">
<?php
}
?>
		  			</div>
		</div>
	</div>
	
</div>

<div class="container">
	<div class="row ">
		<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 text-center">
			<img src="assets/img/notipop/iconos_logo-firmanotipop.svg" height="40px" width="40px">
		</div>
	</div>
	<div class="row justify-content-center">
	<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 text-end">
			Comparte: <span>
				<a href="javascript: void(0);" onclick="window.open('http://www.facebook.com/sharer.php?u=<?=$urlComparti?>','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');" title="Facebook">
					<img height="20px" width="20px" src="assets/img/notipop/iconos_comparte-fb.svg"></span>
				</a>
				<a href="javascript: void(0);" onclick="window.open('https://twitter.com/intent/tweet?text=Esta nota te podría gustar&url=<?=$urlComparti?>&via=PopRadioMx&hashtags=PopRadio,POPFM');" title="Twitter">
					<span><img height="20px" width="20px" src="assets/img/notipop/iconos_comparte-tw.svg"></span></a>
				<a href="mailto:?subject=Esta nota te podría gustar&body=<?=$urlComparti?>"  title="Correo">
					<span><img height="20px" width="20px" src="assets/img/notipop/iconos_comparte-mail.svg"></span>
				</a>
		</div>
	</div>
</div>

</div>
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 padding-top-3">
			<div class="section-title text-center">
          	<p>MÁS NOTIPOP</p>
  			</div>
		</div>
	</div>
	<div class="row">
		<?php
foreach ($listarnotipopHomexlimit as $listarnotipopHomexlimit) {

$fecha_det1= explode('-',$listarnotipopHomexlimit['fecha_inicio']);
$mesesarray1 = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
$mesActual1=""; 
$mesActual1=$mesesarray1[$fecha_det1[1]-1];
$anioActual1=$fecha_det1[0];
?>
          <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 padding-bottom-3">
          	<a href="notipop-interna.php?reference=<?=$listarnotipopHomexlimit['ID']?>">
            <div class="card-notipop" >
              <img src="Admin/public/<?=$listarnotipopHomexlimit['imagen_chica']?>" class="border-redondo-superior" alt="...">
              <div class="card-body-notipop">
                <p class="card-text"><?=$listarnotipopHomexlimit['titulo']?></p>
                <div class="txt-hora text-end fijo-abajo"> <?=$mesActual1." ".$anioActual1?></div>
              </div>
            </div>
            </a>
          </div>
<?php
}
?>
	</div>
	<div class="row padding-bottom-5">
		<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 text-center">
			<a href="notipop.php">
			<button class="btn btn-azul-amarillo">VER MÁS</button>
			</a>
		</div>
	</div>
</div>



<?php
include("pop-chart-seccion-interna.php");
include("modales.php");
include("footer.php");
?>