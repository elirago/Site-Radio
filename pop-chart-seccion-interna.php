<style type="text/css">
  .texto-blanco-1:hover{
    color: #ffffff;

  }
  .texto-blanco-1{
    color: #ffffff;

  }
</style>
<div style="position: relative;" id="popChart">
  <a href="pop-chart.php" >
    <div class="container-fluid ceropadding"  >
      <div class="section-title-grande text-center">
        <p>POP CHART</p>
      </div>
      <div class="titulo-azul text-center">¿YA ESCUCHASTE EL TOP 20 DE LA MÚSICA EN ESPAÑOL?</div>
    <a href="pop-chart.php"><div class="fondo-imagen">

      <div class="titulo-blanco text-center">¡Qué esperas!</div>
      <div class="container padding-top-3">
      <div class="row justify-content-center">
<?php
foreach ($listarpopChart as $listarpopChart) {
?>

        <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8 padding-bottom-3">
          <div class="row justify-content-center">
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
              <a href="pop-chart.php"><img class="img-fluid" src="Admin/public/<?=$listarpopChart['imagen']?>"></a>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4 divPadre text-center" >
              <div class="divtextocentrado">
              <div class="titulo-top20">
                <a href="pop-chart.php" class="texto-blanco-1"><?=$listarpopChart['titulo']?></a>
              </div>
              <div class="texto-top20">
                <a class="texto-blanco-1" href="pop-chart.php"><?=$listarpopChart['autor']?></a>
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
    </div></a>

    </div>
  </a>
    <a href="pop-chart.php"><div class="fondo-degradado"></div></a>
</div>


<div class="container padding-bottom-10">
        <div class="col-12 text-center">
          <a href="pop-chart.php">
            <div class="">

            <img width="50px" height="50px" src="assets/img/iconos_ver-mas.svg" onmouseover="estilofondo('sinisetro','vermas-ama.png')" onmouseout="sinestilofondo('sinisetro','iconos_ver-mas.svg')" id="sinisetro" >
            <div id="txt-flecha" class="text-azul-todo">Ver todo</div>
            </div>
          </a>
        </div>
      </div>

