<style type="text/css">
	.socialBar { /*JUST FOR POSITIONING THE SOCIAL DIV: CENTERED RIGHT*/
  position: fixed;
  right: 0px; /*THIS WILL TAKE YOU A MARGIN FROM RIGHT*/
  top: 45%; /*CENTER THE DIV, DO NOT EDIT*/
  transform: translate(0%, -50%); /*CENTER THE DIV, DO NOT EDIT*/
  -webkit-transform: translate(0%, -50%); /*CENTER THE DIV, DO NOT EDIT*/
  -moz-transform: translate(0%, -50%); /*CENTER THE DIV, DO NOT EDIT*/
  -o-transform: translate(0%, -50%); /*CENTER THE DIV, DO NOT EDIT*/
  /*background-color: #303030; /*WHATEVER COLOR THAT YOU WANT*/
  z-index: 1;
  padding-right: 0.5%;
    background-color: #dfe336;
}
.socialBar .ico {
  display: block; /*VERTICAL POSITION*/
  padding: 8px; /*DO NOT EDIT, MAINTAINS THE CORRECT SIZE FOR BACKGROUND COLOR*/
}
.socialBar:hover .ico {  /*JUST ANIMATION, YOU CAN REMOVE IT IF YOU WANT A FAST COLOR CHANGE*/
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
}


</style>


<style type="text/css">

/* END OF NOT NEEDED SECTION */
/* Button One with font-awesome icon */
.mat-btn{
  transition: all 0.3s ease-in-out; 
  -webkit-transition: all 0.3s ease-in-out; 
  background: #3a49b4;
  border-radius: 50%;
  height: 50px;
  width: 50px;
  border: none;
  color: #58c7db;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  cursor:pointer;
}
.mat-btn:focus{
  outline: 0;
}

.mat-btn-1{
  position: relative;
  transition: all 0.3s ease-in-out; 
  -webkit-transition: all 0.3s ease-in-out; 
  background: #dfe336;
  /*border-radius: 50%;*/
  height: 50px;
  width: 50px;
  border: none;
  color: black;
 /* box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);*/
  cursor:pointer;
}
.mat-btn-1:focus{
  outline: 0;
}
.two{
  /*width: 24px;*/
  height: 5px;
  background-color: #58c7db;
  position: absolute;
  left: 50%;
  top: 50%;
  /*transform: translate(-50%, -50%);*/
  border-radius: 2px;
}
.one{
  width: 24px;
  height: 5px;
  background-color: #58c7db;
  position: absolute;
  left: 50%;
  top: 50%;
  /*transform: translate(-50%, -50%) rotate(90deg);*/
  border-radius: 2px;
}
/* End of btn Two */

/* Clicked State of button, class added dynamicly with JS */
.clicked{
  transition: all 0.3s ease-in-out; 
  -webkit-transition: all 0.3s ease-in-out; 
  /*transform: rotate(45deg);*/
  background:  #e3342f;
}
</style>

<div class="socialBar">
	<div class="div">
 

  <button class="tog mat-btn-1">

    <div class="">
      <i style="font-size: 30px;" class='bx bxs-webcam ' ></i>
      <div style="font-size: 10px;">WebCam</div>
    </div>
    <div class="two"></div>
  </button>
</div>
	<!--<a href="#" title="Webcam" id="linkWebcam" onclick="abrirenvivo()">
		<div id="divcam">
		<i style="font-size: 50px;" class='bx bxs-webcam bx-tada' ></i>
		</div>
	</a>-->
	
</div>	

<script type="text/javascript">
let mat = document.querySelectorAll('.tog');

mat.forEach(function(mat){
    mat.addEventListener('click', function(){
   // mat.classList.toggle('clicked');
    $( "#envivoFace" ).toggle();

    
  })
})

	
</script>