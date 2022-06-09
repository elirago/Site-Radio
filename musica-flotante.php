
<?php

date_default_timezone_set('America/Mexico_City');
$horaActual=date("H");
$horaminutos=date("h:i");
$diaActual=date("Y-m-d");
$diaAuxiliarActual=date("w");

$verificarMusica=$obj->verificarMusica($diaAuxiliarActual,$diaActual,$horaminutos,$horaActual,$reference);

$verificarMusica;
$totalFlotante=0;
if (isset($verificarMusica)) {
  
  $datosLocutor1=$obj->datosLocutor($verificarMusica['id_locutor']);
  $datosPrograma1=$obj->datosPrograma($verificarMusica['id_programa']);
  $datosdias1=$obj->datosdias($verificarMusica['id_dia']);
  $diaAuxiliarCadauno1=$datosdias1['auxiliar'];


$horainicial1  = $verificarMusica['horario_inicial'];
$horainicialp1 = explode(":", $horainicial1);

$horaInicialFinal1="";
$horaInicialFinal1=$horainicialp1[0].":".$horainicialp1[1];

$horafinal1  = $verificarMusica['horario_final'];
$horafinalp1 = explode(":", $horafinal1);

$horaFinalFinal1="";
$horaFinalFinal1=$horafinalp1[0].":".$horafinalp1[1];

$totalFlotante=count($verificarMusica);
# code...
}
if ($totalFlotante!=0) {
  
?>
<div id="div_flotante">
  <div class="float-sm" >
    <div class="fl-fl float-pop">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          
          <div class="col-4" style="padding: 0;">

            <img class="img-fluid" src="<?=$datosLocutor1['imagen']?>">
          </div>
          <div class="col-8 " style="overflow: hidden; padding: 0 3%;">
            <div class="font-14 text-center">
              <?=$datosPrograma1['nombre']?>
            </div>

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

#play-icon{
 background-position-x: center;
}

#play-icon.pause::after{
 
  opacity: 1;
  background-image: url("assets/img/pause.png");
}
.custom-radio-player{
  place-content: center;
}



</style>

  <div href="#" title="Listen to the song" class="player-controls22">
<div class="radio-player-container">
  <div class="radio-player-wrapper">
      
      <div class="radio-content">
        <div id="audio-player-container" class="custom-radio-player" >

          <audio id="player" src="<?=$urlCiudadDestino?>" preload="metadata">
          </audio>
        

          <!--<button  class="play"></button>-->
          <span id="play-icon" class="pause"></span>
         
          
          <!--<span class="pause"></span>-->

          <input style="display: none;" type="range" id="seek-slider" max="100" value="0">
          <span id="duration" class="time" style="display: none;">0:00</span>
          <button class="unmuted" id="mute-icon" style="display: none;"></button>
          <input style="display: none;" type="range" id="volume-slider" max="100" value="0">
             
          

        </div>

      </div>
  </div>
</div>
                  
</div>







            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Floating Social Media bar Ends -->
<?php
}else{
?>
<div id="div_flotante">
  <div class="float-sm" >
    <div class="fl-fl float-pop">
      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-3">

            <img class="img-fluid" src="assets/img/iconos_logo-menu.svg">
          </div>
          <div class="col-9 text-center ">
            MUSICA CONTINUA

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

#play-icon6{
 background-position-x: center;
}

#play-icon6.pause::after{
 
  opacity: 1;
  background-image: url("assets/img/pause.png");
}
.custom-radio-player{
  place-content: center;
}



</style>

  <div href="#" title="Listen to the song" class="player-controls22">
<div class="radio-player-container">
  <div class="radio-player-wrapper">
      
      <div class="radio-content">
        <div id="audio-player-container" class="custom-radio-player" >

          <audio id="player" src="<?=$urlCiudadDestino?>" preload="metadata">
          </audio>
        

          <!--<button  class="play"></button>-->
          <span id="play-icon6" class="pause"></span>
         
          
          <!--<span class="pause"></span>-->

          <input style="display: none;" type="range" id="seek-slider" max="100" value="0">
          <span id="duration" class="time" style="display: none;">0:00</span>
          <button class="unmuted" id="mute-icon" style="display: none;"></button>
          <input style="display: none;" type="range" id="volume-slider" max="100" value="0">
             
          

        </div>

      </div>
  </div>
</div>
                  
</div>

 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
}
?>