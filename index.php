<?php
date_default_timezone_set('America/Mexico_City');
include("modelo.php");
$obj = new modelo(); 
$slideHome=$obj->slideHome();
$listaDias=$obj->listaDias();
$listaDiasMovil=$obj->listaDias();
$listarDestacada=$obj->listarDestacada();
$listarnotipopHome=$obj->listarnotipopHome();
$listarpopChart=$obj->listarpopChart();



$diaAuxiliar="";
$diaAuxiliar=date("w");

$activenotipop="";
$activePOP="";
$activegaleria="";
$activelocutor="";

include("head.php");

include("menu.php");

?>

<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
  <!-- ======= Hero Section ======= -->

   <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center ">
    <div class="container-fluid ceropadding" >

      <div class="row justify-content-center" >
        <div class="col-xl-12 col-lg-12">
          <div id="divHeroPrincipal" class="padding-top-5 padding-movil-hp">
            
          </div> 

        </div>
      </div>

    </div>
  </section><!-- End Hero -->
  
<!--  </section> End Hero -->

<main id="main">
<div>
  <div class="section-title text-center">
         
          <p>PROGRAMACIÓN</p>
          
  </div>
</div>

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
       <div id="divMovil" class="container padding-bottom-10" >

        <div class="row">
          <div class="col-lg-12 " >
            <div class="padding-bottom-10">

              <select style="padding-left: 38%;" id="selectDiasmovil2" name="selectDiasmovil2" class="select-movil form-select form-select-lg" onchange="listarProgramacionMovil()" >
<?php
$claseD="";
$idDia="";
foreach ($listaDiasMovil as $listaDiasMovil) {
if ($listaDiasMovil['auxiliar']==$diaAuxiliar) {
  $claseD="selected";
  $idDia=$listaDiasMovil['ID'];
}else{
  $styleD="bg-inactivo";
  $claseD="";
}
?>          
        <option <?=$claseD?> value="<?=$listaDiasMovil['ID']?>" ><?=$listaDiasMovil['nombre']?></option>     
<?php
}
?>
            </select>
             
            </div>
          </div>
          <div class="col-lg-12 pt-4 pt-lg-0  content" >
                <div id="contenedorMovil"></div>
          </div>
        </div>

      </div>

      <div id="divEscritorio" class="container" >

        <div class="row justify-content-center">
          <div class="col-lg-2 " >
<?php
$claseD="";
$idDia="";
foreach ($listaDias as $listaDias) {

if ($listaDias['auxiliar']==$diaAuxiliar) {
  $claseD="bg-active";
  $idDia=$listaDias['ID'];
}else{
  $styleD="bg-inactivo";
  $claseD="";
}

?>
            <div class="padding-bottom-10">
              <button id="btndia_<?=$listaDias['ID']?>" onclick="listarProgramacion('<?=$listaDias['ID']?>')" type="button"  class="btn btn-lg btn-azul <?=$claseD?>"><?=$listaDias['nombre']?></button>
            </div>
<?php
}
?>
          </div>
          <div class="col-lg-10 pt-4 pt-lg-0  content" >
                <div id="contenedor"></div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

 <!-- ======= Contact Section ======= -->
    <div class="container" >
      <div class="section-title text-center">
        <p>NOTIPOP</p>
      </div>
    </div>
<?php
$fecha_det0= explode('-',$listarDestacada['fecha_inicio']);


$mesesarray0 = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
$mesActual0=""; 
$mesActual0=$mesesarray0[$fecha_det0[1]-1];
$anioActual0=$fecha_det0[0];
?>
    <section id="notipop" >
      <div class="container ">
        <div class="row">
          
<?php
foreach ($listarnotipopHome as $listarnotipopHome) {

$fecha_det= explode('-',$listarnotipopHome['fecha_inicio']);


$mesesarray = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
$mesActual=""; 
$mesActual=$mesesarray[$fecha_det[1]-1];
$anioActual=$fecha_det[0];

//Resultado: Domingo 26 de Enero del 2020
?>
          <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3 padding-bottom-3">
            <a href="notipop-interna.php?reference=<?=$listarnotipopHome['ID']?>">
            <div class="card-notipop" >
              <img src="Admin/public/<?=$listarnotipopHome['imagen_chica']?>" class="img-fluid border-redondo-superior" >
              <div class="card-body-notipop">
                <p class="card-text"><?=$listarnotipopHome['titulo']?></p>
                <div class="txt-hora text-end fijo-abajo"> <?=$mesActual." ".$anioActual?></div>
              </div>
            </div>
            </a>
          </div>
<?php
}
?>
        </div>
        <div class="row padding-top-5">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 text-center">
            <a href="notipop.php"><button class="btn btn-azul-amarillo">MÁS NOTIPOP</button></a>
          </div>
        </div>
      </div>
    </section>

<?php
include("pop-chart-seccion-interna.php");
?>
  </main><!-- End #main -->




<?php
include("footer.php");
?>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.12/jquery.mousewheel.js"></script>

<script type="text/javascript">
  var slickCarousel = $('.slider-vertical');
slickCarousel.slick({
    dots: true,
    infinite: false,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 3,
    vertical: true,
    verticalSwiping: true,
    dots: false,
    centerPadding: '50px',
    arrows: true,
    prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Previous" tabindex="0" role="button"><img width="40px" height="40px" src="assets/img/up-arrow2.png"/></button>',
    nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button"><img width="40px" height="40px" src="assets/img/down2.png"/></button>',
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                infinite: true,
            }
        }, {
            breakpoint: 639,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
          vertical: false,
          verticalSwiping: false,
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});


//mouse wheel
/*slickCarousel.mousewheel(function(e) {
e.preventDefault();
    if (e.deltaY < 0) {
        $(this).slick('slickNext'); 
    }
    else {
        $(this).slick('slickPrev');
    }
});*/

var valueiddIA="<?=$idDia?>";

listarProgramacionMovil();
listarProgramacion(valueiddIA);
mostrarHeroPrincipal();

activaGaleria();

function activaGaleria(){
  console.log("muestra galeria..");
$('.heroP').slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  adaptiveHeight: true,
  arrows: true,
   prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Previous" tabindex="0" role="button"><img width="40px" height="40px" src="assets/img/left-arrow.png"/></button>',
    nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button"><img width="40px" height="40px" src="assets/img/right-arrow.png"/></button>',
});
}
</script>