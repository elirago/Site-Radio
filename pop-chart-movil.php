<div class="container">
  	<div class="row">
  		<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12"> 

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
	<div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 " >
		<div class="container padding-0">
		<div class="row ">
			<div class="col-8">
				<span >
					<label class="numero-popchart"><?=$listaPopChart['posicion']?> </label><br>
				</span>
				<span>
					<div class="titulo-popchart-white"><?=$listaPopChart['titulo']?></div>		
					<div class="subtitulo-popchart-gris"><?=$listaPopChart['autor']?></div>
				</span>
			</div>
			<div class="col-4 padding-25">
				<span >
					<img  class="img-fluid " src="<?=$datosestadoPosicion['imagen']?>">
				</span >
			</div>
		</div>
		</div>

		
							
						
							
						

	</div>
	<div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 text-end" >

		<div>			
			<div onclick="verVideoPop('<?=$listaPopChart['ID']?>')" class="contenedor-play2" data-bs-toggle="modal" data-bs-target="#modalVideo">
				<img style="width: 65%;" src="Admin/public/<?=$listaPopChart['imagen']?>" />
				<div class="centrado-play">
					<div class="boton-play-popchart" ><!--onclick="this.classList.toggle('active')"-->
						<div class="fondo-playpopchart2" x="0" y="0" width="200" height="200">
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
</div>
<div class="row align-items-center">

						<div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
							<button id="btn_<?=$listaPopChart['ID']?>" name="btn_<?=$listaPopChart['ID']?>" onclick="votarVideo('<?=$listaPopChart['ID']?>')" class="btn boton-votar " > VOTAR</button>
							
						</div>
						<div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10 text-center">
							<span class=" wrapper-share2">
							<div class="wrapper-share2">
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


<?php
if ($totP==$totalePop) {
?>
<div class="padding-bottom-5"></div> 
<?php
}else{
?>
<hr class="hr-popchart-1" >
<?php

}
?>

<?php
}
?>
  		</div>
  	</div>

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