<?php
include("modelo.php");
$obj = new modelo(); 
$listaPopChart=$obj->listaPopChart();
$listaNotipop=$obj->listaNotipop();
$activePOP="";

$activePOP="active";
$diaAuxiliar="";
$diaAuxiliar=date("w");
include("head.php");
include("menu.php");

?>
<meta property="og:url"           content="https://joylab.com.mx/pop/pop-chart.php" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="POP" />
<meta property="og:description"   content="POP FM" />
<meta property="og:image"         content="https://merakidigital.mx/POP/assets/img/popchart/popchart-01.jpg" />
 <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container " >

      <div class="row justify-content-center" >
        <div class="col-xl-12 col-lg-12">
			<div class="section-title-grande text-center padding-movil-hp">
        <p>POP CHART</p>
      </div>
      <div class="titulo-azul text-center">A QUÉ NO HAS ESCUCHADO TODAS LAS ROLAS...</div>
      <div class="titulo-blanco text-center">¡Qué esperas!</div>

        </div>
      </div>

    </div>
  </section><!-- End Hero -->
  <div class="container">
  	<div class="row">
  		<div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 col-xxl-8">  			
<?php
$totalePop=count($listaPopChart);
$totP=0;
foreach ($listaPopChart as $listaPopChart) {
$totP++;
$datosestadoPosicion=$obj->datosestadoPosicion($listaPopChart['id_cat_estado_posicion']);

$link_y = $listaPopChart['link_youtube'];
$link_ycomp = str_replace('embed/', 'watch?v=', $link_y);
?>

  			<div class="row align-items-center">
  				<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 text-center text-sm-center text-md-end text-lg-end text-xl-end" >
	  				<div>
	  					
	  					<div onclick="verVideoPop('<?=$listaPopChart['ID']?>')" class="contenedor-play" data-bs-toggle="modal" data-bs-target="#modalVideo">
  							<img src="Admin/public/<?=$listaPopChart['imagen']?>" />
							<div class="centrado-play">
								<div class="boton-play-popchart" ><!--onclick="this.classList.toggle('active')"-->
									<div class="fondo-playpopchart" x="0" y="0" width="200" height="200">
									</div>
									<div class="icono-playpopchart" width="200" height="200">
										<div class="parte-playpopchart izquierda-play" x="0" y="0" width="200" height="200" fill="#fff">
										</div>
										<div class="parte-playpopchart derecha-play" x="0" y="0" width="200" height="200" fill="#fff">
										</div>
									</div>
									<div class="puntero-playpopchart"></div>
								</div>
							</div>
						</div>
					</div>
  				</div>
  				<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 ">
					<div class="row align-items-center justify-content-center" >
						<div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 col-xxl-2 text-center" >
							<div >
								<label class="numero-popchart"><?=$listaPopChart['posicion']?> </label><br>
							</div>
						</div>
						<div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 text-center">
							<img  class="img-fluid img-50" src="<?=$datosestadoPosicion['imagen']?>">
						</div>
						<div class="col-6 col-sm-6 col-md-7 col-lg-7 col-xl-7 col-xxl-7">
							<span>
								<div class="titulo-popchart-white"><?=$listaPopChart['titulo']?></div>		
								<div class="subtitulo-popchart-gris"><?=$listaPopChart['autor']?></div>
							</span>
						</div>
						<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
							<hr class="hr-popchart2">
						</div>
						<div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
							<button id="btn_<?=$listaPopChart['ID']?>" name="btn_<?=$listaPopChart['ID']?>" onclick="votarVideo('<?=$listaPopChart['ID']?>')" class="btn boton-votar " > VOTAR</button>
							
						</div>
						<div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10 text-center">
							<span class="padding-right-popchart wrapper-share">
							<div class="wrapper-share">
								<img class="img-fluid compartir " src="assets/img/share.png">
							  
							  <ul class="social-share">
							    <li class="fa fa-facebook"><a href="javascript: void(0);" onclick="window.open('http://www.facebook.com/sharer.php?u=<?=$link_ycomp?>','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');" title="Facebook">
							    	<img width="100%" height="100%" src="assets/img/share-fb.png">
							    </a></li>
							    <li class="fa fa-twitter"><a href="javascript: void(0);" onclick="window.open('https://twitter.com/intent/tweet?text=Este video te podría gustar&url=<?=$link_ycomp?>&via=PopRadioMx&hashtags=PopRadio,POPFM');" title="Twitter">
							    	<img width="100%" height="100%" src="assets/img/share-tw.png">
							    </a></li>
							    <li class="fa fa-xing"><a href="mailto:?subject=Este video te podría gustar&body=<?=$link_ycomp?>"  title="Correo">
							    	<img width="100%" height="100%" src="assets/img/share-mail.png">
							    	
							    </a></li>
							    <li class="fa fa-xing"><a href="#" title="WhatsApp">
							    	<a href="https://wa.me/?text=Este video te podría gustar <?=$link_ycomp?>"></a>
							    	<img width="100%" height="100%" src="assets/img/share-wa.png">
							    </a></li>
							  </ul>
							</div>
							</span>
						</div>
					</div>
  				</div>
  			</div>
<?php
if ($totP==$totalePop) {
?>
<div class="padding-bottom-5"></div> 
<?php
}else{
?>
<hr class="hr-popchart" >
<?php

}
?>

  			
<?php
}
?>


  			
  		</div>
  		<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4">
  			<div class="container">
  			<div class="row">
  				<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 padding-bottom-5">
		  			<div class="titulo-blanco"> NOTIPOP </div>
		  			<div class="fondo-white padding-5">
<?php
foreach ($listaNotipop as $listaNotipop) {
	
?>
		  				<div class="texto-notipop-black" >
		  					<?=$listaNotipop['titulo']?><br>
		  					<a class="texto-negro a-negro" href="notipop-interna.php?reference=<?=$listaNotipop['ID']?>"> Ver más</a>
		  				</div><hr class="hr-negro">
<?php
}
?>
		  			</div>
  				</div>
  			</div>
  			</div>
  		</div>
  	</div>
</div>


<?php
include("modales.php");
include("footer.php");
?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.7/dist/sweetalert2.all.min.js"></script>

<script type="text/javascript">
	$('.compartir').on('click', function() {
  $(this).parent().toggleClass('start-animation');
});
</script>