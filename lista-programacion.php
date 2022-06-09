<style type="text/css">
  .slider-vertical .slick-prev, .slider-vertical .slick-next {
    left: -275px!important;
  }
</style>
<?php

if ($numeroreg!=0) {
?>
<div class="container">
  <div class="slider-vertical">
<?php
date_default_timezone_set('America/Mexico_City');
$horaActual=date("H");
$horaminutos=date("h:i");
$diaActual=date("Y-m-d");
$diaAuxiliarActual=date("w");

  
foreach ($res as $res) {
  $datosLocutor=$this->datosLocutor($res['id_locutor']);
  $datosPrograma=$this->datosPrograma($res['id_programa']);
  $datosdias=$this->datosdias($res['id_dia']);
  $diaAuxiliarCadauno=$datosdias['auxiliar'];

$horainicial  = $res['horario_inicial'];
$horainicialp = explode(":", $horainicial);

$horaInicialFinal="";
$horaInicialFinalprint=$horainicialp[0].":".$horainicialp[1];
$horaInicialFinal=$horainicialp[0];

$horafinal  = $res['horario_final'];
$horafinalp = explode(":", $horafinal);

$horaFinalFinal="";
$horaFinalFinalprint=$horafinalp[0].":".$horafinalp[1];
$horaFinalFinal=$horafinalp[0];
$claseActiva="";
if ($diaAuxiliarActual==$diaAuxiliarCadauno) {

$hms_inicio = $horaInicialFinal;
$hms_fin = $horaFinalFinal;
$desde = $horaInicialFinal; 
$hasta = $horaFinalFinal;
$ecualizadorActivo=0;
$hora_actual = intval(date("H"));
/*echo "<br>-->1:".$hora_actual;
echo "<br>-->2:".$desde;
echo "<br>-->3:".$hora_actual;
echo "<br>-->4:".$hasta;
echo "<br>------------<br>";*/
if ($hora_actual >= $desde && $hora_actual < $hasta) {//$hora_actual >= $desde &&
    $claseActiva="bg-amarillo-active";
    $ecualizadorActivo=1;
    //echo "<br>lo pinto amarillo";
} else {
    $claseActiva="bg-negro";
    $ecualizadorActivo=0;
     //echo "<br>lo pinto negro";
}

}else{
$claseActiva="bg-negro";
}
?>
    <div>
      <div class=" <?=$claseActiva?>  fondocard margin-bottom-2">
        <div class="container">
          <div class="row padding-1">
            <div class="col-3">
              <div>
                <img style="width: 70%;" class="redondear-25 img-fluid" src="<?=$datosLocutor['imagen']?>">
              </div>
            </div>
            <div class="col-6">
             <div id="idTitulo" class="tituloCard"><?=$datosPrograma['nombre']?></div> 
             <div id="idSubtitulo" class="subtituloCard"><?=$datosLocutor['nombre']?></div> 
            </div>
            <div class="col-3">
              <div id="idhorario" class="divHorario">
                <?=$horaInicialFinalprint?> a <br><?=$horaFinalFinalprint?> hrs.
              </div>
<?php
if ($ecualizadorActivo==1) {
 
?>
              <div class="equalizer">
              <div class="equalizer-bar"></div>
              <div class="equalizer-bar"></div>
              <div class="equalizer-bar"></div>
              <div class="equalizer-bar"></div>
              <div class="equalizer-bar"></div>
              <div class="equalizer-bar"></div>
              </div>
<?php
}
?>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php
}


?>

  </div>  
</div>

<?php
}else{
  echo "<div class='titulo-azul text-center'>Aún no tenemos programación </div>";
}
?>

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
</script>