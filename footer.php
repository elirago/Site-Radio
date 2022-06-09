<?php
include("envivofacebook.php");

if($quesoy!=1){
?>
  <!-- ======= Footer ======= -->
  <div class="container-fluid" style="padding: 0; margin: 0;">
        <div class="row" style="padding: 0; margin: 0;">
          <div style="position: relative; padding: 0; margin: 0;">
          <div class="pleca-amarilla"></div>
          <div class="footer-contenido">
            <div class="container">
            <div class="row align-items-center">
              <div class="col-4 col-sm-6 col-md-3 col-lg-3 col-xl-3 col-xxl-3  order-1 order-sm-1 order-md-1 order-lg-1 order-xl-1 order-xxl-1">
                <div>
                <img class="absoluto-top-1 " width="100px" height="100px" src="assets/img/iconos_logo-footer.svg" >
                </div>
              </div>
              <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 col-xxl-2 text-center order-3 order-sm-2 order-md-2 order-lg-2 order-xl-2 order-xxl-2 textos-footer padding-bottom-1">CONTACTO</div>
              <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 col-xxl-2 text-center order-4 order-sm-3 order-md-3 order-lg-3 order-xl-3 order-xxl-3 textos-footer padding-bottom-1">CONÓCENOS</div>
              <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 col-xxl-2 text-center order-5 order-sm-4 order-md-4 order-lg-4 order-xl-4 order-xxl-4 textos-footer padding-bottom-1">
                <a class="texto-negro" href="#"> AVISO DE PRIVACIDAD</a></div>
              <div class="col-8 col-sm-6 col-md-3 col-lg-3 col-xl-3 col-xxl-3 text-center order-2 order-sm-5 order-md-5 order-lg-5 order-xl-5 order-xxl-5">
                <a target="_blank" href="https://www.facebook.com/PopRadioMx/">
                <img width="28px" height="28px" src="assets/img/iconos_fb-footer.svg">
                </a>
                <a target="_blank" href="https://www.instagram.com/pop_radio_mx/">
                <img width="28px" height="28px" src="assets/img/iconos_ig-footer.svg">
                </a>
                <a target="_blank" href="https://twitter.com/PopRadioMx">
                <img width="28px" height="28px" src="assets/img/iconos_tw-footer.svg">
                </a>
                <a target="_blank" href="https://www.youtube.com/c/PopRadioMx/">
                <img width="28px" height="28px" src="assets/img/iconos_yt-footer.svg">
                </a>
                <a target="_blank" href="https://www.tiktok.com/@popradiomx">
                <img width="28px" height="28px" src="assets/img/iconos_tik-footer.svg">
                </a>
              </div>
            </div>
            </div>

          </div>
          <div class="pleca-amarilla"></div>
          </div>
        </div>
      </div>
  
   <footer  class="pleca-blanca">
    <div class="container">
      <div class="desarrollado text-center">
       <!--Sitio desarrollado por Conexus-->
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="js/funciones.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script type="text/javascript">
$( document ).ready(function() {
 console.log( "ready!" );   
const seekSlider = document.getElementById('seek-slider');
const volumeSlider = document.getElementById('volume-slider');
const audioPlayerContainer = document.getElementById('audio-player-container');
const playIcon = document.getElementById('play-icon');
const playIcon3 = document.getElementById('play-icon3');
const playIcon4 = document.getElementById('play-icon4');
const playIcon5 = document.getElementById('play-icon5');
const muteIcon = document.getElementById('mute-icon');
console.log(seekSlider);
console.log("----------");
console.log(playIcon);
let playState = 'pause';
let muteState = 'unmute';
let rAF = null;
   

const showRangeProgress = (rangeInput) => {
    if(rangeInput === seekSlider) {
      audioPlayerContainer.style.setProperty('--seek-before-width', rangeInput.value / rangeInput.max * 100 + '%');
    } else {
      audioPlayerContainer.style.setProperty('--volume-before-width', rangeInput.value / rangeInput.max * 100 + '%');
    }
}

/*seekSlider.addEventListener('input', (e) => {
    showRangeProgress(e.target);
});
volumeSlider.addEventListener('input', (e) => {
    showRangeProgress(e.target);
});*/

let audio = document.querySelector('audio');

let getaudio3 = $("#player3")[0];
let getaudio = $("#player")[0];
audio=getaudio;
//audio.play();

    getaudio.play();
const durationContainer = document.getElementById('duration');

const calculateTime = (secs) => {
  const minutes = Math.floor(secs / 60);
  const seconds = Math.floor(secs % 60);
  const returnedSeconds = seconds < 10 ? `0${seconds}` : `${seconds}`;
  return `${minutes}:${returnedSeconds}`;
}

const displayDuration = () => {
  durationContainer.textContent = calculateTime(audio.duration);
}

if (audio.readyState > 0) {
  displayDuration();
} else {
  audio.addEventListener('loadedmetadata', () => {
    displayDuration();
  });
}

/** Implementation of the functionality of the audio player */


const setSliderMax = () => {
    seekSlider.max = Math.floor(audio.duration);
}

const displayBufferedAmount = () => {



    const bufferedAmount = Math.floor(audio.buffered.end(audio.buffered.length - 1));
    audioPlayerContainer.style.setProperty('--buffered-width', `${(bufferedAmount / seekSlider.max) * 100}%`);
}

if (audio.readyState > 0) {
    displayDuration();
    setSliderMax();
    displayBufferedAmount();
    volumeSlider.value = (audio.volume * 100);
} else {
    audio.addEventListener('loadedmetadata', () => {
      displayDuration();
      setSliderMax();
      displayBufferedAmount();
      volumeSlider.value = (audio.volume * 100);
    });
}

audio.addEventListener('progress', displayBufferedAmount);

const whilePlaying = () => {
  seekSlider.value = Math.floor(audio.currentTime);
  durationContainer.textContent = calculateTime(seekSlider.value);
  audioPlayerContainer.style.setProperty('--seek-before-width', `${seekSlider.value / seekSlider.max * 100}%`);
  raf = requestAnimationFrame(whilePlaying);
}
console.log(playIcon);
playIcon.addEventListener('click', () => {
  console.log("entre aqui");
  if(playState === 'play') {
    console.log("entre aqui2");
    audio.play();
    getaudio.play();
    playIcon.classList.remove('play');
    playIcon.classList.add('pause');
    playIcon3.classList.remove('play');
    playIcon3.classList.add('pause');
    requestAnimationFrame(whilePlaying);
    playState = 'pause';
    console.log("entre aqui");
  } else {
    console.log("entre aqui");
    audio.pause();
    playIcon.classList.remove('pause');
    playIcon.classList.add('play');
    playIcon3.classList.remove('pause');
    playIcon3.classList.add('play');
    cancelAnimationFrame(whilePlaying);
    playState = 'play';
  }
});

console.log(playIcon3);
playIcon3.addEventListener('click', () => {
  console.log("entre aqui3333");
  if(playState === 'play') {
    console.log("entre aqui3");
    audio.play();
    getaudio.play();
    
    playIcon4.classList.remove('play');
    playIcon4.classList.add('pause');
    playIcon3.classList.remove('play');
    playIcon3.classList.add('pause');
    playIcon.classList.remove('play');
    playIcon.classList.add('pause');
    requestAnimationFrame(whilePlaying);
    playState = 'pause';
    console.log("entre aqui3333333");
  } else {
    console.log("entre aqui3333");
    audio.pause();
    getaudio.pause();
    
    playIcon4.classList.remove('pause');
    playIcon4.classList.add('play');
    playIcon3.classList.remove('pause');
    playIcon3.classList.add('play');
    playIcon.classList.remove('pause');
    playIcon.classList.add('play');
    cancelAnimationFrame(whilePlaying);
    playState = 'play';
  }
});

console.log(playIcon4);
playIcon4.addEventListener('click', () => {
  console.log("entre aqui444");
  
  if(playState === 'play') {
    console.log("entre aqui4");
    audio.play();
    getaudio.play();
    
    playIcon3.classList.remove('play');
    playIcon3.classList.add('pause');
    playIcon4.classList.remove('play');
    playIcon4.classList.add('pause');
    playIcon.classList.remove('play');
    playIcon.classList.add('pause');
    requestAnimationFrame(whilePlaying);
    playState = 'pause';
    
  } else {
    console.log("entre aqui444");
    audio.pause();
    
    playIcon3.classList.remove('pause');
    playIcon3.classList.add('play');
    playIcon4.classList.remove('pause');
    playIcon4.classList.add('play');
    playIcon.classList.remove('pause');
    playIcon.classList.add('play');
    cancelAnimationFrame(whilePlaying);
    playState = 'play';
  }
});

console.log(playIcon5);
playIcon5.addEventListener('click', () => {
  console.log("entre aqui555");
  if(playState === 'play') {
    console.log("entre aqui5");
    audio.play();
    getaudio.play();
    playIcon4.classList.remove('play');
    playIcon4.classList.add('pause');
    playIcon3.classList.remove('play');
    playIcon3.classList.add('pause');
    playIcon5.classList.remove('play');
    playIcon5.classList.add('pause');
    playIcon.classList.remove('play');
    playIcon.classList.add('pause');
    requestAnimationFrame(whilePlaying);
    playState = 'pause';
    console.log("entre aqui5");
  } else {
    console.log("entre aqui5");
    audio.pause();
    playIcon4.classList.remove('pause');
    playIcon4.classList.add('play');
    playIcon3.classList.remove('pause');
    playIcon3.classList.add('play');
    playIcon5.classList.remove('pause');
    playIcon5.classList.add('play');
    playIcon.classList.remove('pause');
    playIcon.classList.add('play');
    cancelAnimationFrame(whilePlaying);
    playState = 'play';
  }
});

console.log(playIcon6);
playIcon6.addEventListener('click', () => {
  console.log("entre aqui6666");
  if(playState === 'play') {
    console.log("entre aqui6");
    audio.play();
    getaudio.play();
    playIcon4.classList.remove('play');
    playIcon4.classList.add('pause');
    playIcon3.classList.remove('play');
    playIcon3.classList.add('pause');
    playIcon5.classList.remove('play');
    playIcon5.classList.add('pause');
    playIcon.classList.remove('play');
    playIcon.classList.add('pause');
    requestAnimationFrame(whilePlaying);
    playState = 'pause';
    console.log("entre aqui666");
  } else {
    console.log("entre aqui666");
    audio.pause();
    playIcon4.classList.remove('pause');
    playIcon4.classList.add('play');
    playIcon3.classList.remove('pause');
    playIcon3.classList.add('play');
    playIcon5.classList.remove('pause');
    playIcon5.classList.add('play');
    playIcon.classList.remove('pause');
    playIcon.classList.add('play');
    cancelAnimationFrame(whilePlaying);
    playState = 'play';
  }
});

seekSlider.addEventListener('change', () => {
  audio.currentTime = seekSlider.value;
});

audio.addEventListener('timeupdate', () => {
  seekSlider.value = Math.floor(audio.currentTime);
});

seekSlider.addEventListener('input', () => {
  durationContainer.textContent = calculateTime(seekSlider.value);
  if(!audio.paused) {
    cancelAnimationFrame(raf);
  }
});

seekSlider.addEventListener('change', () => {
  audio.currentTime = seekSlider.value;
  if(!audio.paused) {
    requestAnimationFrame(whilePlaying);
  }
});

volumeSlider.addEventListener('input', (e) => {
  const value = e.target.value;

  audio.volume = value / 100;
});

muteIcon.addEventListener('click', () => {
  if(muteState === 'unmute'){
    audio.muted = true;
    muteState = 'muted';
    muteIcon.classList.remove('unmuted');
    muteIcon.classList.add('muted');
  } else {
    audio.muted = false;
    muteState = 'unmute';
    muteIcon.classList.remove('muted');
    muteIcon.classList.add('unmuted');
  }
})

/* Implementation of the Media Session API */


});
</script>




<script type="text/javascript">







var idDia="<?=$idDia?>";
//cambiaCiudad(idDia);
//mostrarStreaming();
</script>

<script type="text/javascript">
  function estilofondo(valor,stilo) {
            var stl="assets/img/"+stilo;
           
            //valor.style.backgroundImage = "url('"+stl+"')";
            $("#"+valor).attr("src",stl);
            $("#txt-flecha").addClass("text-amarillo-todo");
            $("#txt-flecha").removeClass("text-azul-todo");
          //  valor.style.backgroundColor=stilo;

            // body...
          }
          function sinestilofondo(valor,stilo) {
             var stl="assets/img/"+stilo;
            //valor.style.backgroundImage = "url('"+stl+"')";
             $("#"+valor).attr("src",stl);
             $("#txt-flecha").addClass("text-azul-todo");
            $("#txt-flecha").removeClass("text-amarillo-todo");
          }
</script>

<?php
date_default_timezone_set('America/Mexico_City');
$horaActual3=date("H");
$horaminutos3=date("h:i");
$diaActual3=date("Y-m-d");
$diaAuxiliarActual3=date("w");

$verificarMusica3=$obj->verificarMusica($diaAuxiliarActual3,$diaActual3,$horaminutos3,$horaActual3,$reference);
if (isset($verificarMusica3)) {
 
  $datosLocutor3=$obj->datosLocutor($verificarMusica3['id_locutor']);
  $datosPrograma3=$obj->datosPrograma($verificarMusica3['id_programa']);
  $datosdias3=$obj->datosdias($verificarMusica3['id_dia']);
  $diaAuxiliarCadauno3=$datosdias3['auxiliar'];

$totalFlotanteFooter=0;
  $totalFlotanteFooter=count($verificarMusica3);

}

  if ($totalFlotanteFooter!=0) {
?>
<div id="div-floting-movil">
<div class="mobile-floating-bar">
    <div class="container">
      <div class="row">
        
        <div class="col-4">

          <img style="width: 90%;" class="img-fluid" src="<?=$datosLocutor3['imagen']?>">
        </div>
        <div class="col-8 ">
          <div class="text-footer-fijo">
          <?=$datosPrograma3['nombre']?>
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
.radio-content{
  display: flex;
  flex-direction: column;
}

.custom-radio-player,
.radio-content{
  width: 100%;
  
}

.custom-radio-player{
  
  display: flex;
}


#play-icon4{
  background-position-x: center;
}



#play-icon4.pause::after{
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
          <span id="play-icon4" class="pause"></span>
        
          
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
<?php
}else{
?>
<div id="div-floting-movil">
<div class="mobile-floating-bar">
    <div class="container">
      <div class="row">
        
        <div class="col-3">

          <img class="img-fluid" src="assets/img/iconos_logo-menu.svg">
        </div>
        <div class="col-9 ">
          <div class="text-footer-fijo">
          MUSICA CONTINUA
          </div>
 <style type="text/css">

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

.radio-content{
  display: flex;
  flex-direction: column;
}

.custom-radio-player,
.radio-content{
  width: 100%;
  
}

.custom-radio-player{
  
  display: flex;
}


#play-icon5{
  background-position-x: center;
}



#play-icon5.pause::after{
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
          <span id="play-icon5" class="pause"></span>
        
          
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

<?php
}
?>

<script type="text/javascript">


// En esta función luego que cerramos la ventana flotante. procedemos a detener el video 
jQuery(function($) {

  $('.btn_cerrar').on('click', function() {
    //$('.video').addClass('videoflotante2');    
    $('#contenido_vid').hide(); 
    $('#maxim').show();    
    //$('video').trigger('pause');
  });  

});
jQuery(function($) {

  $('.btn_menos').on('click', function() {
    //$('.video').addClass('videoflotante2');    
    $('#maxim').show();    
    $('#contenido_vid').hide();    
    //$('video').trigger('pause');
  });  

});
jQuery(function($) {

  $('.btn_mas').on('click', function() {
    //$('.video').addClass('videoflotante2');    
    $('#contenido_vid').show();    
    $('#maxim').hide();    
      
    //$('video').trigger('pause');
  });  

});




</script>


<script type="text/javascript">
  
</script>
</body>

</html>
<?php
}else{

?>
  <!-- ======= Footer ======= -->
  <div class="container-fluid" style="padding: 0; margin: 0;">
        <div class="row" style="padding: 0; margin: 0;">
          <div style="position: relative; padding: 0; margin: 0;">
          <div class="pleca-amarilla"></div>
          <div class="footer-contenido">
            <div class="container">
            <div class="row align-items-center">
              <div class="col-4 col-sm-6 col-md-3 col-lg-3 col-xl-3 col-xxl-3  order-1 order-sm-1 order-md-1 order-lg-1 order-xl-1 order-xxl-1">
                <div>
                <img class="absoluto-top-1 " width="100px" height="100px" src="assets/img/iconos_logo-footer.svg" >
                </div>
              </div>
              <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 col-xxl-2 text-center order-3 order-sm-2 order-md-2 order-lg-2 order-xl-2 order-xxl-2 textos-footer padding-bottom-1">CONTACTO</div>
              <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 col-xxl-2 text-center order-4 order-sm-3 order-md-3 order-lg-3 order-xl-3 order-xxl-3 textos-footer padding-bottom-1">CONÓCENOS</div>
              <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 col-xxl-2 text-center order-5 order-sm-4 order-md-4 order-lg-4 order-xl-4 order-xxl-4 textos-footer padding-bottom-1">
                <a class="texto-negro" href="#"> AVISO DE PRIVACIDAD</a></div>
              <div class="col-8 col-sm-6 col-md-3 col-lg-3 col-xl-3 col-xxl-3 text-center order-2 order-sm-5 order-md-5 order-lg-5 order-xl-5 order-xxl-5">
                <a target="_blank" href="https://www.facebook.com/PopRadioMx/">
                <img width="28px" height="28px" src="assets/img/iconos_fb-footer.svg">
                </a>
                <a target="_blank" href="https://www.instagram.com/pop_radio_mx/">
                <img width="28px" height="28px" src="assets/img/iconos_ig-footer.svg">
                </a>
                <a target="_blank" href="https://twitter.com/PopRadioMx">
                <img width="28px" height="28px" src="assets/img/iconos_tw-footer.svg">
                </a>
                <a target="_blank" href="https://www.youtube.com/c/PopRadioMx/">
                <img width="28px" height="28px" src="assets/img/iconos_yt-footer.svg">
                </a>
                <a target="_blank" href="https://www.tiktok.com/@popradiomx">
                <img width="28px" height="28px" src="assets/img/iconos_tik-footer.svg">
                </a>
              </div>
            </div>
            </div>

          </div>
          <div class="pleca-amarilla"></div>
          </div>
        </div>
      </div>
  
   <footer  class="pleca-blanca">
    <div class="container">
      <div class="desarrollado text-center">
       <!--Sitio desarrollado por Conexus-->
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="js/funciones.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script type="text/javascript">
$( document ).ready(function() {
 console.log( "ready!" );   
const seekSlider = document.getElementById('seek-slider');
const volumeSlider = document.getElementById('volume-slider');
const audioPlayerContainer = document.getElementById('audio-player-container');

const playIcon4 = document.getElementById('play-icon4');
const playIcon5 = document.getElementById('play-icon5');
const muteIcon = document.getElementById('mute-icon');
console.log(seekSlider);
console.log("----------");
//console.log(playIcon);
let playState = 'pause';
let muteState = 'unmute';
let rAF = null;
   

const showRangeProgress = (rangeInput) => {
    if(rangeInput === seekSlider) {
      audioPlayerContainer.style.setProperty('--seek-before-width', rangeInput.value / rangeInput.max * 100 + '%');
    } else {
      audioPlayerContainer.style.setProperty('--volume-before-width', rangeInput.value / rangeInput.max * 100 + '%');
    }
}

/*seekSlider.addEventListener('input', (e) => {
    showRangeProgress(e.target);
});
volumeSlider.addEventListener('input', (e) => {
    showRangeProgress(e.target);
});*/

let audio = document.querySelector('audio');

let getaudio3 = $("#player3")[0];
let getaudio = $("#player")[0];
audio=getaudio;
//audio.play();

    getaudio.play();
const durationContainer = document.getElementById('duration');

const calculateTime = (secs) => {
  const minutes = Math.floor(secs / 60);
  const seconds = Math.floor(secs % 60);
  const returnedSeconds = seconds < 10 ? `0${seconds}` : `${seconds}`;
  return `${minutes}:${returnedSeconds}`;
}

const displayDuration = () => {
  durationContainer.textContent = calculateTime(audio.duration);
}

if (audio.readyState > 0) {
  displayDuration();
} else {
  audio.addEventListener('loadedmetadata', () => {
    displayDuration();
  });
}

/** Implementation of the functionality of the audio player */


const setSliderMax = () => {
    seekSlider.max = Math.floor(audio.duration);
}

const displayBufferedAmount = () => {



    const bufferedAmount = Math.floor(audio.buffered.end(audio.buffered.length - 1));
    audioPlayerContainer.style.setProperty('--buffered-width', `${(bufferedAmount / seekSlider.max) * 100}%`);
}

if (audio.readyState > 0) {
    displayDuration();
    setSliderMax();
    displayBufferedAmount();
    volumeSlider.value = (audio.volume * 100);
} else {
    audio.addEventListener('loadedmetadata', () => {
      displayDuration();
      setSliderMax();
      displayBufferedAmount();
      volumeSlider.value = (audio.volume * 100);
    });
}

audio.addEventListener('progress', displayBufferedAmount);

const whilePlaying = () => {
  seekSlider.value = Math.floor(audio.currentTime);
  durationContainer.textContent = calculateTime(seekSlider.value);
  audioPlayerContainer.style.setProperty('--seek-before-width', `${seekSlider.value / seekSlider.max * 100}%`);
  raf = requestAnimationFrame(whilePlaying);
}




console.log(playIcon4);
playIcon4.addEventListener('click', () => {
  console.log("entre aqui444");
  
  if(playState === 'play') {
    console.log("entre aqui4");
    audio.play();
    getaudio.play();
    
    
    playIcon4.classList.remove('play');
    playIcon4.classList.add('pause');
    
    requestAnimationFrame(whilePlaying);
    playState = 'pause';
    
  } else {
    console.log("entre aqui444");
    audio.pause();
    
    
    playIcon4.classList.remove('pause');
    playIcon4.classList.add('play');
    
    cancelAnimationFrame(whilePlaying);
    playState = 'play';
  }
});

console.log(playIcon5);
playIcon5.addEventListener('click', () => {
  console.log("entre aqui555");
  if(playState === 'play') {
    console.log("entre aqui5");
    audio.play();
    getaudio.play();
    playIcon4.classList.remove('play');
    playIcon4.classList.add('pause');
    
    playIcon5.classList.remove('play');
    playIcon5.classList.add('pause');
    
    requestAnimationFrame(whilePlaying);
    playState = 'pause';
    console.log("entre aqui5");
  } else {
    console.log("entre aqui5");
    audio.pause();
    playIcon4.classList.remove('pause');
    playIcon4.classList.add('play');
    
    playIcon5.classList.remove('pause');
    playIcon5.classList.add('play');
    
    cancelAnimationFrame(whilePlaying);
    playState = 'play';
  }
});

console.log(playIcon6);
playIcon6.addEventListener('click', () => {
  console.log("entre aqui6666");
  if(playState === 'play') {
    console.log("entre aqui6");
    audio.play();
    getaudio.play();
    playIcon4.classList.remove('play');
    playIcon4.classList.add('pause');
    
    playIcon5.classList.remove('play');
    playIcon5.classList.add('pause');
    
    requestAnimationFrame(whilePlaying);
    playState = 'pause';
    console.log("entre aqui666");
  } else {
    console.log("entre aqui666");
    audio.pause();
    playIcon4.classList.remove('pause');
    playIcon4.classList.add('play');
    
    playIcon5.classList.remove('pause');
    playIcon5.classList.add('play');
    
    cancelAnimationFrame(whilePlaying);
    playState = 'play';
  }
});

seekSlider.addEventListener('change', () => {
  audio.currentTime = seekSlider.value;
});

audio.addEventListener('timeupdate', () => {
  seekSlider.value = Math.floor(audio.currentTime);
});

seekSlider.addEventListener('input', () => {
  durationContainer.textContent = calculateTime(seekSlider.value);
  if(!audio.paused) {
    cancelAnimationFrame(raf);
  }
});

seekSlider.addEventListener('change', () => {
  audio.currentTime = seekSlider.value;
  if(!audio.paused) {
    requestAnimationFrame(whilePlaying);
  }
});

volumeSlider.addEventListener('input', (e) => {
  const value = e.target.value;

  audio.volume = value / 100;
});

muteIcon.addEventListener('click', () => {
  if(muteState === 'unmute'){
    audio.muted = true;
    muteState = 'muted';
    muteIcon.classList.remove('unmuted');
    muteIcon.classList.add('muted');
  } else {
    audio.muted = false;
    muteState = 'unmute';
    muteIcon.classList.remove('muted');
    muteIcon.classList.add('unmuted');
  }
})

/* Implementation of the Media Session API */


});
</script>




<script type="text/javascript">







var idDia="<?=$idDia?>";
//cambiaCiudad(idDia);
//mostrarStreaming();
</script>

<script type="text/javascript">
  function estilofondo(valor,stilo) {
            var stl="assets/img/"+stilo;
           
            //valor.style.backgroundImage = "url('"+stl+"')";
            $("#"+valor).attr("src",stl);
            $("#txt-flecha").addClass("text-amarillo-todo");
            $("#txt-flecha").removeClass("text-azul-todo");
          //  valor.style.backgroundColor=stilo;

            // body...
          }
          function sinestilofondo(valor,stilo) {
             var stl="assets/img/"+stilo;
            //valor.style.backgroundImage = "url('"+stl+"')";
             $("#"+valor).attr("src",stl);
             $("#txt-flecha").addClass("text-azul-todo");
            $("#txt-flecha").removeClass("text-amarillo-todo");
          }
</script>

<?php
date_default_timezone_set('America/Mexico_City');
$horaActual3=date("H");
$horaminutos3=date("h:i");
$diaActual3=date("Y-m-d");
$diaAuxiliarActual3=date("w");

$verificarMusica3=$obj->verificarMusica($diaAuxiliarActual3,$diaActual3,$horaminutos3,$horaActual3,$reference);
if (isset($verificarMusica3)) {
 
  $datosLocutor3=$obj->datosLocutor($verificarMusica3['id_locutor']);
  $datosPrograma3=$obj->datosPrograma($verificarMusica3['id_programa']);
  $datosdias3=$obj->datosdias($verificarMusica3['id_dia']);
  $diaAuxiliarCadauno3=$datosdias3['auxiliar'];

$totalFlotanteFooter=0;
  $totalFlotanteFooter=count($verificarMusica3);

}

  if ($totalFlotanteFooter!=0) {
?>
<div id="div-floting-movil">
<div class="mobile-floating-bar">
    <div class="container">
      <div class="row">
        
        <div class="col-4">

          <img style="width: 90%;" class="img-fluid" src="<?=$datosLocutor3['imagen']?>">
        </div>
        <div class="col-8 ">
          <div class="text-footer-fijo">
          <?=$datosPrograma3['nombre']?>
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
.radio-content{
  display: flex;
  flex-direction: column;
}

.custom-radio-player,
.radio-content{
  width: 100%;
  
}

.custom-radio-player{
  
  display: flex;
}


#play-icon4{
  background-position-x: center;
}



#play-icon4.pause::after{
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

          <audio id="player" src="http://ice42.securenetsystems.net/POP" preload="metadata">
          </audio>
        

          <!--<button  class="play"></button>-->
          <span id="play-icon4" class="pause"></span>
        
          
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
<?php
}else{
?>
<div id="div-floting-movil">
<div class="mobile-floating-bar">
    <div class="container">
      <div class="row">
        
        <div class="col-3">

          <img class="img-fluid" src="assets/img/iconos_logo-menu.svg">
        </div>
        <div class="col-9 ">
          <div class="text-footer-fijo">
          MUSICA CONTINUA
          </div>
 <style type="text/css">

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

.radio-content{
  display: flex;
  flex-direction: column;
}

.custom-radio-player,
.radio-content{
  width: 100%;
  
}

.custom-radio-player{
  
  display: flex;
}


#play-icon5{
  background-position-x: center;
}



#play-icon5.pause::after{
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
          <span id="play-icon5" class="pause"></span>
        
          
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

<?php
}
?>

<script type="text/javascript">


// En esta función luego que cerramos la ventana flotante. procedemos a detener el video 
jQuery(function($) {

  $('.btn_cerrar').on('click', function() {
    //$('.video').addClass('videoflotante2');    
    $('#contenido_vid').hide(); 
    $('#maxim').show();    
    //$('video').trigger('pause');
  });  

});
jQuery(function($) {

  $('.btn_menos').on('click', function() {
    //$('.video').addClass('videoflotante2');    
    $('#maxim').show();    
    $('#contenido_vid').hide();    
    //$('video').trigger('pause');
  });  

});
jQuery(function($) {

  $('.btn_mas').on('click', function() {
    //$('.video').addClass('videoflotante2');    
    $('#contenido_vid').show();    
    $('#maxim').hide();    
      
    //$('video').trigger('pause');
  });  

});




</script>


<script type="text/javascript">
  
</script>
</body>

</html>




<?php   
}
?>