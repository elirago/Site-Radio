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
<?php
if($quesoy!=1){
//include("pop-chart-movil.php");
    include("pop-chart-escritorio.php");
}else{
	include("pop-chart-movil.php");
}
?>


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