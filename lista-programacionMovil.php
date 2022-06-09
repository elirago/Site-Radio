<?php

if ($numeroregMovil!=0) {
?>
<div class="container-fluid" style="padding: 0;">
  <div class="slider-verticalMovilx">
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
$horaInicialFinal=$horainicialp[0].":".$horainicialp[1];

$horafinal  = $res['horario_final'];
$horafinalp = explode(":", $horafinal);

$horaFinalFinal="";
$horaFinalFinal=$horafinalp[0].":".$horafinalp[1];
$claseActiva="";
if ($diaAuxiliarActual==$diaAuxiliarCadauno) {

$hms_inicio = $horaInicialFinal;
$hms_fin = $horaFinalFinal;
$desde = $horaInicialFinal; 
$hasta = $horaFinalFinal;
$ecualizadorActivo=0;
$hora_actual = intval(date("H"));
if ($hora_actual >= $desde && $hora_actual < $hasta) {
    $claseActiva="bg-amarillo-active";
    $ecualizadorActivo=1;
} else {
    $claseActiva="bg-negro";
    $ecualizadorActivo=0;
}

}else{
$claseActiva="bg-negro";
}
?>

    <div>
      <div class=" <?=$claseActiva?>  fondocard margin-bottom-2">
        <div class="container-fluid">
          <div class="row padding-3">
            <div class="col-3">
              
                <img class=" img-fluid" src="<?=$datosLocutor['imagen']?>">
              
            </div>
            <div class="col-6">
             <div id="idTitulo" class="tituloCard"><?=$datosPrograma['nombre']?></div> 
             <div id="idSubtitulo" class="subtituloCard"><?=$datosLocutor['nombre']?></div> 
            </div>
            <div class="col-3">
              <div id="idhorario" class="divHorario">
                <?=$horaInicialFinal?> a <br><?=$horaFinalFinal?> hrs.
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
    var slickCarousel = $('.slider-verticalMovil');
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
    prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Previous" tabindex="0" role="button">Previous</button>',
    nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button">Next</button>',
    
});


//mouse wheel
slickCarousel.mousewheel(function(e) {
e.preventDefault();
    if (e.deltaY < 0) {
        $(this).slick('slickNext'); 
    }
    else {
        $(this).slick('slickPrev');
    }
});
</script>