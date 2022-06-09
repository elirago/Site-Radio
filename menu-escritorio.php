<?php
$reference=$_GET['reference'];
if (filter_var($reference, FILTER_VALIDATE_INT)) {
  $reference=$_GET['reference'];
} else {
  $reference=1;
}
$listaCiudades=$obj->listaCiudades();
$datosciudades=$obj->datosciudades($reference);
$urlCiudadDestino=$datosciudades['streaming'];
$urlDimanica="https://merakidigital.mx/POP/";
?>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <input type="hidden" name="valorCiudad" id="valorCiudad" value="<?=$reference?>">
    
    <div class="container d-flex align-items-center justify-content-center "><!--justify-content-lg-between-->
      <a style="width: 23%;" href="index.php" class="logo me-auto me-lg-0"><img src="assets/img/iconos_logo-menu.svg" alt="" class="img-fluid" height="80px" width="80px"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li  ><a class="nav-link scrollto cursos-pointer <?=$activePOP?>" onclick="redireccionarurl('pop-chart.php','<?=$urlDimanica?>')" >POP CHART</a></li> <!--href="pop-chart.php"-->
          <li><a class="nav-link scrollto cursos-pointer <?=$activenotipop?>" onclick="redireccionarurl('notipop.php','<?=$urlDimanica?>')" >NOTIPOP</a></li><!--active  href="notipop.php"-->
          <li><a class="nav-link scrollto cursos-pointer <?=$activelocutor?>" onclick="redireccionarurl('locutores.php','<?=$urlDimanica?>')" >LOCUTORES</a></li>
          
          <li>

<!-- Fin. USAstreams.com html5 player -->
            <div id="streamingDiv">
            <a class="nav-link scrollto fondo-envivo" >
              <!--<div id="streamingDiv"></div>-->

              <div class="envivo"  >EN VIVO

<script type="text/javascript">
  var ulsStreamingvv="<?=$urlCiudadDestino?>";
</script>

<script type="text/javascript">
MRP.insert({
'url':ulsStreamingvv,
'lang':'es',
'codec':'mp3',
'volume':100,
'autoplay':true,
'jsevents':true,
'buffering':0,
'title':'POPFM',
'wmode':'transparent',
'skin':'abrahadabra2',
'width':100,
'height':90
});
</script>


              <!--  <div href="#" title="En vivo" class="player-controls">
                  
                  <span class="play"></span>
                  <span class="pause"></span>
                  
                </div>
                EN VIVO


                <audio id="player">-->
                  
                    <!--<source src="<?=$var_PHP?>" type="audio/mp3">-->
                 
                <!--</audio>-->
               
              </div>
            </a>
          </div>

            <!--<a class="nav-link scrollto" href="#contact">
            <img src="assets/img/en-vivo.png" class="img-fluid" width="60px" height="100px">
          </a>-->

          </li>
          <li><a class="nav-link scrollto cursos-pointer <?=$activegaleria?>" onclick="redireccionarurl('galeria.php','<?=$urlDimanica?>')" >GALERÍA</a></li>
          <li><a class="nav-link scrollto cursos-pointer " >PODCAST</a></li>
          <li><a class="nav-link scrollto cursos-pointer " >EVENTOS</a></li>
          
          <!--<li><a class="nav-link scrollto " href="#">
            <div>
      <div class="text-end">
        <span><img width="30px" height="30px" src="assets/img/iconos_fb-nav.svg"></span>
        <span><img width="30px" height="30px" src="assets/img/iconos_ig-nav.svg"></span>
        <span><img  width="30px" height="30px" src="assets/img/iconos_tw-nav.svg"></span>
        <span><img width="30px" height="30px" src="assets/img/iconos_yt-nav.svg"></span>
        <span><img width="30px" height="30px" src="assets/img/iconos_tik-nav.svg"></span>
      </div>
      <div class=""><br>
        <span>Elige tu Ciudad</span>
        <span>
          <select id="selectCiudad" name="selectCiudad" class="select-ciudad" onchange="cambiaCiudad('<?=$diaAuxiliar?>')">
<?php
//foreach ($listaCiudades as $listaCiudades) {
 
?>
            <option value="<?=$listaCiudades['ID']?>"><?=$listaCiudades['nombre']?></option>
<?php
//}
?>
          </select>
        </span>
        
      </div>
      </div>

          </a></li>-->

          <!--<li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>-->
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

 <div style="padding-left: 5%;">
  
      <div class="text-end">
        
        <a target="_blank" href="https://www.facebook.com/PopRadioMx/">
        <span><img width="30px" height="30px" src="assets/img/iconos_fb-nav.svg"></span></a>
        <a target="_blank" href="https://www.instagram.com/pop_radio_mx/">
        <span><img width="30px" height="30px" src="assets/img/iconos_ig-nav.svg"></span></a>
        <a target="_blank" href="https://twitter.com/PopRadioMx">
        <span><img  width="30px" height="30px" src="assets/img/iconos_tw-nav.svg"></span></a>
        <a target="_blank" href="https://www.youtube.com/c/PopRadioMx/">
        <span><img width="30px" height="30px" src="assets/img/iconos_yt-nav.svg"></span></a>
        <a target="_blank" href="https://www.tiktok.com/@popradiomx">
        <span><img width="30px" height="30px" src="assets/img/iconos_tik-nav.svg"></span></a>
      </div>
      <div class=""><br>
        <span class="texto-blanco">Elige tu Ciudad</span>
        <span>
          <select id="selectCiudad" name="selectCiudad" class="select-ciudad" onchange="cambiaCiudad('index.php','<?=$urlDimanica?>','<?=$diaAuxiliar?>')">
            <option  value="1">Selecciona...</option>
<?php
$selectedCiudad="";
foreach ($listaCiudades as $listaCiudades) {
 if ($reference==$listaCiudades['ID']) {
   $selectedCiudad="selected";
 }else{
  $selectedCiudad="";
 } 
?>
            <option <?=$selectedCiudad?>  value="<?=$listaCiudades['ID']?>"><?=$listaCiudades['nombre']?></option>
<?php
}
?>
          </select>
        </span>
        
      </div>
      </div>

      <div>
        
      </div>

      <!--<a href="#about" class="get-started-btn scrollto">Get Started</a>-->

    </div>

  </header><!-- End Header -->
<?php
if($quesoy!=1){
    include("musica-flotante.php");
  }else{
   
  }
?>