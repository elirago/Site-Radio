
<style type="text/css">
  /* El texto de contenido donde flota el video */
.txt_contenido{
  text-align: justify;
}

/* Efectos que damos al mandar a flotar el video */
@-webkit-keyframes fade-in-up {
  0% {
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
            transform: translateY(0);
    opacity: 1;
  }
}

/* El texto de contenido donde flota el video */
@keyframes fade-in-up {
  0% {
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
            transform: translateY(0);
    opacity: 1;
  }
}

/* Contenedor principal del video */
.contenedor_video {
  /*padding: 45px;*/
  display: block;
  margin: 0 auto;
}

/* El subcontenedor con la clase .video con el elemento HTML video */
.video video {
  max-width: 100%;
  max-height: 100%;
  width: 750px;
  height: 450px;
  background-color: #e6e5e6;  
}

/* Contenedor del video flotante o sticky */
.videoflotante {
  z-index: 10;
    bottom: 0%;
    position: fixed;
    -webkit-transform: translateY(100%);
    transform: translateY(100%);
    width: auto;
    height: auto;
    -webkit-animation: fade-in-up .25s ease forwards;
    animation: fade-in-up .25s ease forwards;
    border: 5px solid #000000;
    /* left: 0; */
    background-color: black;
}

/* Cuando cerramos el video flotante, volvemos su posición al estado inicial */
.videoflotante2 {
  position: initial;
}

/* Botón cerrar el video flotante */
.btn_cerrar{
  font-size: 30px;
  position: absolute;
  margin-top: -40px;
  margin-left: 230px;
  cursor: pointer;
}
.btn_menos{
  font-size: 30px;
  position: absolute;
  margin-top: -40px;
  margin-left: 270px;
  cursor: pointer;
}

/* Oculta el botón para cerrar el video flotante */
.btn_cerrar_cls{
  display: none;
}
.btn_mas{
  font-size: 40px;
    
    cursor: pointer;
}
</style>
<div id="envivoFace" class="videoEnvivoface videoflotante"  style="display: none;">
 
  <div id="maxim" style="display: none;">
    <div class="btn_mas" > 
     <i class='bx bx-expand-alt' style='color:#58c7db' ></i>
    </div>
  </div>

<div class="contenedor_video" id="contenido_vid">

                

                    <!--<iframe title="vimeo-player" src="https://player.vimeo.com/video/176909027?h=52a368ffa8" width="300" height="auto" frameborder="0" allowfullscreen></iframe>-->
<?php
$datosWebCam=$obj->datosWebCam();
$datoURL="";
$datoURL=trim($datosWebCam['url']);
if ($datoURL!="") {
?>
<div class="video">

                    <div class="btn_cerrar"> 
                      <i class='bx bxs-x-circle' style='color:#ff0000' ></i> 
                    </div><div class="btn_menos"> 
                      <i class='bx bxs-minus-circle' style='color:#dfe336'  ></i> 
                    </div>
<?php
  echo $datosWebCam['url'];
?>
                    </div>
<?php
}else{
?>
<style type="text/css">
  .card-sin  {
  position:relative;
  width: 300px;
  height: 230px;
}

.card-sin > img {
  position: fixed;
  top:0;
  left:0;
  bottom:0;
  right:0;
  z-index:0;
  width: 300px;
  height: 230px;
  object-fit: cover;
}

.card-sin > .content {
  font-weight: bold;
  text-align: center;
    width: 100%;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    z-index: 2;
}

.card-sin > .bg-opaque {
  position: fixed;
  top:0;
  left:0;
  bottom:0;
  right:0;
  z-index:1;
  width: 300px;
  height: 230px;
  background: #000;
  opacity:0.8;
}
</style>
<div class="card-sin video videoflotante">
  <img src="assets/img/iconos_logo-menu.svg" style="width: 300px; height: 230px;">
  <div class="bg-opaque"></div>
  <div class="content">
    <div style="color: #58c7db;">El video en directo no esta transmitiendo en este momento</div>
  </div>
</div>




<?php
}
?>
                    
                    
                  
                

              </div>


<!--<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v14.0" nonce="W02dRaiF"></script>-->

  <!-- Your embedded video player code -->
  <!--<div class="fb-video" data-href="https://www.facebook.com/FacebookDevelopers/videos/10152454700553553/" data-width="500" data-allowfullscreen="true" data-autoplay="true" data-show-text="true" data-show-captions="true">

    <div class="fb-xfbml-parse-ignore">
      <blockquote cite="https://www.facebook.com/FacebookDevelopers/videos/10152454700553553/">
        <a href="https://www.facebook.com/FacebookDevelopers/videos/10152454700553553/">How to Share With Just Friends</a>
        <p>How to share with just friends.</p>
        Posted by <a href="https://www.facebook.com/facebook/">Facebook</a> on Friday, December 5, 2014
      </blockquote>
    </div>

  </div>-->
  


</div>
