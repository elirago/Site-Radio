
<?php

date_default_timezone_set('America/Mexico_City');
$horaActual=date("H");
$horaminutos=date("h:i");
$diaActual=date("Y-m-d");
$diaAuxiliarActual=date("w");

$verificarMusica=$obj->verificarMusica($diaAuxiliarActual,$diaActual,$horaminutos,$horaActual);



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
if ($totalFlotante!=0) {
  
?>
<div id="div_flotante">
<div class="float-sm" >
  <div class="fl-fl float-pop">
    <div class="container">
      <div class="row">
        
        <div class="col-4">

          <img class="img-fluid" src="<?=$datosLocutor1['imagen']?>">
        </div>
        <div class="col-8 ">
          <div class="font-14">
            <?=$datosPrograma1['nombre']?>
<!-----test 1------->
<!-- Inicio. radio hosting USAstreams.com html5 player -->
<!-- Licencia: GRATIS-XDF4543ERF 
<iframe name="contenedorPlayer" class="cuadroBordeado" allow="autoplay" width="100%" height="78px" marginwidth=0 marginheight=0 hspace=0 vspace=0 frameborder=0 scrolling=no  src="https://cp.usastreams.com/pr2g/APPlayerRadioHTML5.aspx?stream=https://ice42.securenetsystems.net/POP&fondo=05&formato=mpeg&color=14&titulo=2&autoStart=1&vol=5&tipo=14&nombre=POPFM&imagen=https://cp.usastreams.com/playerHTML5/img/cover.png"></iframe>-->
<!-- En players responsive puede modificar el weight a sus necesidades, Por favor no modifique el resto del codigo para poder seguir ofreciendo este servicio gratis  -->
<!-- Fin. USAstreams.com html5 player -->



<!-----test 2------->
<!--<div id="lunaradio" style='width:100%; height:70px;'>
<div style="overflow:hidden; height:0px; width:0px;"><a href="https://radioplayer.luna-universe.com" title="native html internet radio player plugin">NATIVE INTERNET WEB RADIO PLAYER PLUGIN FOR SHOUTCAST, ICECAST AND RADIONOMY</a> powered by <a href="https://www.sodah.de" title="wordpress webdesign mainz">Sodah Webdesign Mainz</a></div>
</div>          
   <script src="https://radioplayer.luna-universe.com/js/lunaradio.min.js?v=6.22.04.27e"></script>
  
<script>
window.addEventListener("load", function () {
    lunaRadio("lunaradio",{ token: "",
    userinterface: "big",
    backgroundcolor: "rgba(14,16,21,0.5)",
    fontcolor: "#ffffff",
    hightlightcolor: "#fa225b",
    fontname: "",
    googlefont: "",
    fontratio: "0.4",
    radioname: "POPFM",
    scroll: "true",
    coverimage: "",
    onlycoverimage: "false",
    coverstyle: "circle",
    usevisualizer: "real",
    visualizertype: "5",
    multicolorvisualizer: "false",
    color1: "#e66c35",
    color2: "#d04345",
    color3: "#85a752",
    color4: "#067dcc",
    visualizeropacity: "0.9",
    visualizerghost: "0.0",
    itunestoken: "1000lIPN",
    metadatatechnic: "fallback",
    ownmetadataurl: "",
    streamurl: "http://ice42.securenetsystems.net/POP",
    streamtype: "other",
    icecastmountpoint: "",
    radionomyid: "",
    radionomyapikey: "",
    radiojarid: "",
    radiocoid: "",
    shoutcastpath: "/stream?type=http&nocache=1080",
    shoutcastid: "1",
    streamsuffix: "",
    metadatainterval: "20000",
    volume: "90",
    debug: "false",
    uselocalstorage: "false",
    autoplay: "false",
    displayliveicon: "true",
    displayvisualizericon: "true",
  usestreamcorsproxy: "false", 
  corsproxy: "",
  });
});
</script> -->

<!-----test 2------->



<!--TESTE 3-->
 <!-- Inicio. radio hosting USAstreams.com html5 player -->
<!-- Licencia: GRATIS-XDF4543ERF -->
<!--<iframe name="contenedorPlayer" class="cuadroBordeado" allow="autoplay" width="250px" height="40px" marginwidth=0 marginheight=0 hspace=0 vspace=0 frameborder=0 scrolling=no  src="https://cp.usastreams.com/html5PlayerGratis.aspx?stream=httpS://ice42.securenetsystems.net/POP&fondo=05&formato=mpeg&color=3&titulo=1&autoStart=1&vol=5&nombre=POPFM&botonPlay=1"></iframe>-->
<!-- En players responsive puede modificar el weight a sus necesidades, Por favor no modifique el resto del codigo para poder seguir ofreciendo este servicio gratis  -->
<!-- Fin. USAstreams.com html5 player -->

<!-- Inicio. radio hosting USAstreams.com html5 player -->
<!-- Licencia: GRATIS-XDF4543ERF 
<iframe name="contenedorPlayer" class="cuadroBordeado" allow="autoplay" width="100%" height="40px" marginwidth=0 marginheight=0 hspace=0 vspace=0 frameborder=0 scrolling=no  src="https://cp.usastreams.com/html5PlayerGratis.aspx?stream=httpS://ice42.securenetsystems.net/POP&fondo=05&formato=mpeg&color=3&titulo=1&autoStart=1&vol=5&nombre=POPFM"></iframe>-->
<!-- En players responsive puede modificar el weight a sus necesidades, Por favor no modifique el resto del codigo para poder seguir ofreciendo este servicio gratis  -->
<!-- Fin. USAstreams.com html5 player -->
        <!-- Inicio. radio hosting USAstreams.com html5 player -->
<!-- Licencia: GRATIS-XDF4543ERF 

<iframe name="contenedorPlayer" class="cuadroBordeado" allow="autoplay" width="100%" height="80px" marginwidth=0 marginheight=0 hspace=0 vspace=0 frameborder=0 scrolling=no  src="https://cp.usastreams.com/pr2g/APPlayerRadioHTML5.aspx?stream=https://ice42.securenetsystems.net/POP&fondo=00&formato=mpeg&color=3&titulo=2&autoStart=1&vol=10&tipo=200&nombre=POPFM&server=https://ice42.securenetsystems.net/status.xslCHUMILLASmount=/POP"></iframe>-->
<!-- En players responsive puede modificar el weight a sus necesidades, Por favor no modifique el resto del codigo para poder seguir ofreciendo este servicio gratis  -->
<!-- Fin. USAstreams.com html5 player -->

<!--TESTE 3-->

<!--TEST 4

<iframe  src=https://cdn.creatuplayer.com/codigo.php?bg=black&accent=black&ip=https://ice42.securenetsystems.net/POP&logo=https://merakidigital.mx/POP/assets/img/favicon-ios.png&autoplay=false&idioma=es></iframe>-->
<!--TEST 4-->






          
            </div>
            <!--<div class="envivo text-start"  >
                <div href="#" title="En vivo" class="player-controls">
                  
                  <span class="play"></span>
                  <span class="pause"></span>
                 
                </div>
                <audio id="player2">
                  
                </audio>

            </div>

          </div>-->
        
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
        
        <div class="col-2">

          <img class="img-fluid" src="assets/img/iconos_logo-menu.svg">
        </div>
        <div class="col-10 ">
          <!-- Licencia: GRATIS-XDF4543ERF -->

<!-- Inicio. radio hosting USAstreams.com html5 player -->
<!-- Licencia: GRATIS-XDF4543ERF -->
<iframe name="contenedorPlayer" class="cuadroBordeado" allow="autoplay" width="100%" height="78px" marginwidth=0 marginheight=0 hspace=0 vspace=0 frameborder=0 scrolling=no  src="https://cp.usastreams.com/pr2g/APPlayerRadioHTML5.aspx?stream=https://streamssl.eu:1290/usastreams&fondo=05&formato=mpeg&color=14&titulo=2&autoStart=1&vol=5&tipo=14&nombre=Radio+TOP40&imagen=https://cp.usastreams.com/playerHTML5/img/cover.png"></iframe>
<!-- En players responsive puede modificar el weight a sus necesidades, Por favor no modifique el resto del codigo para poder seguir ofreciendo este servicio gratis  -->
<!-- Fin. USAstreams.com html5 player -->

<!-- En players responsive puede modificar el weight a sus necesidades, Por favor no modifique el resto del codigo para poder seguir ofreciendo este servicio gratis  -->
<!-- Fin. USAstreams.com html5 player -->
           <!-- Inicio. radio hosting USAstreams.com html5 player -->
<!-- Licencia: GRATIS-XDF4543ERF 
<iframe name="contenedorPlayer" class="cuadroBordeado" allow="autoplay" width="100%" height="80px" marginwidth=0 marginheight=0 hspace=0 vspace=0 frameborder=0 scrolling=no  src="https://cp.usastreams.com/pr2g/APPlayerRadioHTML5.aspx?stream=http://ice42.securenetsystems.net/POP&fondo=00&formato=mpeg&color=3&titulo=2&autoStart=1&vol=10&tipo=200&nombre=POPFM&imagen=https://merakidigital.mx/POP/assets/img/favicon-ios.png&server=http://ice42.securenetsystems.net/status.xslCHUMILLASmount=/POP"></iframe>-->
<!-- En players responsive puede modificar el weight a sus necesidades, Por favor no modifique el resto del codigo para poder seguir ofreciendo este servicio gratis  -->
<!-- Fin. USAstreams.com html5 player -->
          <!-- Inicio. radio hosting USAstreams.com html5 player -->
<!-- Licencia: GRATIS-XDF4543ERF 
<iframe name="contenedorPlayer" class="cuadroBordeado" allow="autoplay" width="100%" height="78px" marginwidth=0 marginheight=0 hspace=0 vspace=0 frameborder=0 scrolling=no  src="https://cp.usastreams.com/html5-player-barra-fino.aspx?stream=http://ice42.securenetsystems.net/POP&fondo=00&formato=mpeg&color=3&titulo=2&autoStart=1&vol=10&nombre=POPFM&botonPlay=1&imagen=https://cp.usastreams.com/playerHTML5/img/cover.png"></iframe>-->
<!-- En players responsive puede modificar el weight a sus necesidades, Por favor no modifique el resto del codigo para poder seguir ofreciendo este servicio gratis  -->
<!-- Fin. USAstreams.com html5 player -->

          <!--<div class="font-14">
         Música Continua
            </div>
            <div class="envivo text-start"  >
                <div href="#" title="En vivo" class="player-controls">
                  
                  <span class="play"></span>
                  <span class="pause"></span>
                 
                </div>
                <audio id="player2">
                  
                </audio>

            </div>-->

          </div>
        
      </div>
    </div>
  </div>
</div>
</div>
<?php
}
?>