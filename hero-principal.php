 <div class="heroP heroMovil"  >
<?php
foreach ($res as $res) {
 
?>
      <div style="position: relative;"><img class="img-fluid" src="Admin/public/<?=$res['imagen']?>">

<div class="btn-mas-absoluto" >

<?php
if ($res['link']!="") {
  ?>
<a target="_blak" href="<?=$res['link']?>"><button class="btn btn-amarillo-hero">VER MÁS</button></a>
  <?php
}else{

}
?>  
           
          </div>
      </div>
<?php
}
?>  
</div>  

 <script type="text/javascript">
   $('.heroP').slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  adaptiveHeight: true,
  arrows: true,
   prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Previous" tabindex="0" role="button"><img width="40px" height="40px" src="assets/img/left-arrow.png"/></button>',
    nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button"><img width="40px" height="40px" src="assets/img/right-arrow.png"/></button>',
});
 </script>
