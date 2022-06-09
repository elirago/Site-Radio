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
<?php
if($quesoy!=1){

?>          
          <li>

<!-- Fin. USAstreams.com html5 player -->
            <div id="streamingDiv">
            <a class="nav-link scrollto fondo-envivo" >
              <!--<div id="streamingDiv"></div>-->
<style type="text/css">
 .audio-label {
  line-height: 1;
  position: absolute;
  right: 1.35em;
  text-align: right;
  text-transform: uppercase;
  top: -0.4em;
}
.audio-label span {
  font-size: 18px;
}
 .audio-label span small {
  display: block;
  font-size: 0.83em;
}
.play,
.pause {
  background: url("assets/img/play.png") no-repeat 0 0;
  height: 30px;
  width: 40px;
  -webkit-transition: all 0.25s linear;
  transition: all 0.25s linear;
  z-index: 5;
}

.play::before,
.play::after {
  -webkit-border-radius: 1000px;
  -moz-border-radius: 1000px;
  border-radius: 1000px;
  content: "";
  height: 30px;
  right: 0;
  top: 0;
  width: 40px;
  z-index: 0;
}
.play::before {
  box-shadow: 0 0 0 rgba(255, 255, 255, 0);
  -webkit-transition: all 0.25s linear;
  transition: all 0.25s linear;
}
 
.pause {
  background-image: url("assets/img/pause.png");
  opacity: 1;
  right: 0;
  top: 0;
}
.playing .play {
  opacity: 0;
}
.playing .pause {
  opacity: 1;
}
.playing .pause::before {
  -moz-animation: audio1 1.5s infinite ease-in-out;
  -o-animation: audio1 1.5s infinite ease-in-out;
  -webkit-animation: audio1 1.5s infinite ease-in-out;
  animation: audio1 1.5s infinite ease-in-out;
}
.playing .pause::after {
  -moz-animation: audio2 2.2s infinite ease-in-out;
  -o-animation: audio2 2.2s infinite ease-in-out;
  -webkit-animation: audio2 2.2s infinite ease-in-out;
  animation: audio2 2.2s infinite ease-in-out;
}

.play::before {
  box-shadow: 0 0 12px rgba(255, 238, 125, 0.8);
}
.animate-audio1 {
  -moz-animation: audio1 1.5s infinite ease-in-out;
  -o-animation: audio1 1.5s infinite ease-in-out;
  -webkit-animation: audio1 1.5s infinite ease-in-out;
  animation: audio1 1.5s infinite ease-in-out;
}
@keyframes audio1 {
  0%,
  100% {
    box-shadow: 0 0 0 0.4em rgba(255, 255, 255, 0.4);
  }
  25% {
    box-shadow: 0 0 0 0.15em rgba(255, 255, 255, 0.15);
  }
  50% {
    box-shadow: 0 0 0 0.55em rgba(255, 255, 255, 0.55);
  }
  75% {
    box-shadow: 0 0 0 0.25em rgba(255, 255, 255, 0.25);
  }
}
.animate-audio2 {
  -moz-animation: audio2 2.2s infinite ease-in-out;
  -o-animation: audio2 2.2s infinite ease-in-out;
  -webkit-animation: audio2 2.2s infinite ease-in-out;
  animation: audio2 2.2s infinite ease-in-out;
}
@keyframes audio2 {
  0%,
  100% {
    box-shadow: 0 0 0 0.25em rgba(255, 255, 255, 0.15);
  }
  25% {
    box-shadow: 0 0 0 0.4em rgba(255, 255, 255, 0.3);
  }
  50% {
    box-shadow: 0 0 0 0.15em rgba(255, 255, 255, 0.05);
  }
  75% {
    box-shadow: 0 0 0 0.55em rgba(255, 255, 255, 0.45);
  }
}

.thumb-wrapper{
  flex: 1 0 30%;
  margin-right: 20px;
}

.thumb-wrapper img{
   object-fit: cover;
   max-width: 100%;
}

.radio-content-description h3{
  font-size: .95rem;
  margin: 0;
}

.radio-content-description p{
  color: #333;
  font-size: .85rem;
  line-height: 1.13rem;
  color: #817400;
}

#play-icon3{
 background-position-x: center;
}

#play-icon3.pause::after{
 
  opacity: 1;
  background-image: url("assets/img/pause.png");
}
.custom-radio-player{
  place-content: center;
}

</style>
              <div class="envivo"  >

<div href="#" title="Listen to the song" class="player-controls11">
<div class="radio-player-container">
  <div class="radio-player-wrapper">
      EN VIVO
      <div class="radio-content">
        <div id="audio-player-container" class="custom-radio-player">
          <audio id="player" src="<?=$urlCiudadDestino?>" preload="metadata">
          </audio>
        <span id="play-icon3" class="pause"></span>
          <input style="display: none;" type="range" id="seek-slider" max="100" value="0">
          <span id="duration" class="time" style="display: none;">0:00</span>
          <button class="unmuted" id="mute-icon" style="display: none;"></button>
          <input style="display: none;" type="range" id="volume-slider" max="100" value="0">
        </div>
      </div>
  </div>
</div>              
</div>


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
<?php
}else{
?>
<script type="text/javascript">
  var ulsStreamingvv="<?=$urlCiudadDestino?>";
</script>


<?php

}
?>
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
        <span><img class="redes_30_30"  src="assets/img/iconos_fb-nav.svg"></span></a>
        <a target="_blank" href="https://www.instagram.com/pop_radio_mx/">
        <span><img class="redes_30_30" src="assets/img/iconos_ig-nav.svg"></span></a>
        <a target="_blank" href="https://twitter.com/PopRadioMx">
        <span><img  class="redes_30_30" src="assets/img/iconos_tw-nav.svg"></span></a>
        <a target="_blank" href="https://www.youtube.com/c/PopRadioMx/">
        <span><img class="redes_30_30" src="assets/img/iconos_yt-nav.svg"></span></a>
        <a target="_blank" href="https://www.tiktok.com/@popradiomx">
        <span><img class="redes_30_30" src="assets/img/iconos_tik-nav.svg"></span></a>
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