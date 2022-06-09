<?php
include("modelo.php");
$obj = new modelo(); 



$idGaleria = $_GET['reference'];

$idGaleria = filter_var($idGaleria, FILTER_SANITIZE_NUMBER_INT);
$datosGaleria=$obj->datosGaleria($idGaleria);
$totalimagesGaleriaxtipo1=$obj->totalimagesGaleriaxtipo(1,$idGaleria);
$totalimagesGaleriaxtipo0=$obj->totalimagesGaleriaxtipo(0,$idGaleria);
$listarGaleriaxlimit=$obj->listarGaleriaxlimit('0,2');
include("head.php");
include("menu.php");

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
<section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container " >
     
      <div class="row justify-content-center" >
        <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10 col-xxl-10">
			<div class="section-title-minusculas text-center padding-bottom-3 padding-movil-galeria">

			<p><?=$datosGaleria['titulo']?></p>

			</div>
		    <div class="titulo-blanco-light text-center"><?=$datosGaleria['descripcion']?></div>
        </div>
      </div>

    </div>
  </section><!-- End Hero -->
  <div class="container">
  	<div class="row">
  		<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
  			
<!-- Gallery -->
<div class="row">
<?php
$numerosTotalesM="";
$numerosTotales=array($totalimagesGaleriaxtipo1,$totalimagesGaleriaxtipo0); 
$numerosTotalesM=max($numerosTotales); //imprime 10
$numerosTotalesM=$numerosTotalesM+1;
for ($i=1; $i <$numerosTotalesM; $i++) { 
	$listaGaleriaImgGrandes=$obj->listaGaleriaImgGrandes($i);
	$listaGaleriaImgChicas=$obj->listaGaleriaImgChicas($i);
$num = $i;
//Comprobamos si num es un número par o no
if (($num % 2) == 0) {
    //Es un número par
?>
<div class="col-lg-4 col-md-12 mb-4 mb-lg-0">

	 <a href="Admin/public/<?=$listaGaleriaImgChicas['imagen']?>" data-fancybox="popGallery" >
	<img
      src="Admin/public/<?=$listaGaleriaImgChicas['imagen']?>"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />
	</a>
	<a href="Admin/public/<?=$listaGaleriaImgGrandes['imagen']?>" data-fancybox="popGallery" >
  	<img
      src="Admin/public/<?=$listaGaleriaImgGrandes['imagen']?>"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Wintry Mountain Landscape"
    />
    </a>
  </div>
    
    <?php
}else {
    //Es un número impar
    ?>
<div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
	<a href="Admin/public/<?=$listaGaleriaImgGrandes['imagen']?>" data-fancybox="popGallery" >
  	<img
      src="Admin/public/<?=$listaGaleriaImgGrandes['imagen']?>"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Wintry Mountain Landscape"
    /></a>
    <a href="Admin/public/<?=$listaGaleriaImgChicas['imagen']?>" data-fancybox="popGallery" >
    <img
      src="Admin/public/<?=$listaGaleriaImgChicas['imagen']?>"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />
</a>
  </div>
    <?php
}

}
?>
  
</div>
<!-- Gallery -->


  		</div>
  	</div>
  </div>

  <div class="container">
  	<div class="row">
  		<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
  			<div class="section-title-minusculas text-center">

			<p>Más Eventos</p>

			</div>
  		</div>
  	</div>
  	<div class="row justify-content-center">

<?php
foreach ($listarGaleriaxlimit as $listarGaleriaxlimit) {
	
?>
  		<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 col-xxl-5 text-center padding-bottom-3" >
			<a href="galeria-interna.php?reference=<?=$listarGaleriaxlimit['ID']?>">
			<figure class="card-galeria">
			<img src="Admin/public/<?=$listarGaleriaxlimit['img_principal']?>" alt="" />
			<figcaption class="">
			  <div class="description-galeria">
			  	
			    <div class="padding-top-25">
			    <?=$listarGaleriaxlimit['titulo']?>
				
			    </div>
			  </div>
			  <div class="title"><?=$listarGaleriaxlimit['titulo']?></div>
			  
			</figcaption>
			</figure>
			</a>

  		</div>
<?php
}
?>


  	</div>
  	<div class="row">
  		<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 text-center padding-bottom-3">
  			<a href="galeria.php"><button class="btn btn-azul-amarillo">VER MÁS FOTOS</button></a>
  		</div>
  	</div>
  </div>

<?php
include("modales.php");
include("footer.php");
?>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>

<script type="text/javascript">
	Fancybox.bind('[data-fancybox="popGallery"]', {
  Image: {
    zoom: false,
  },
});
	

</script>