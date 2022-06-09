
<style type="text/css">
  .buttonsf {
  background-color: rgba(68, 199, 103, .9);
  -moz-border-radius: 28px;
  -webkit-border-radius: 28px;
  border-radius: 5%;
  border: 1% solid #18ab29;
  display: inline-block;
  cursor: pointer;
  color: #ffffff;
  font-family: Arial;
  font-size: 75%;
  height: 90px;
  width: 12.44%;
  text-align: center;
  text-decoration: none;
  float: left;
  text-shadow: 0px 1px 0px #2f6627;
  margin: 0.03%;
  z-index: 1;
}

.buttonsf:hover {
  background-color: #5cbf2a;
}

.fav {
  display: block;
}

.remove {
  left: 5px;
  z-index: 2;
}

#removebtn {
  display: inline-block;
}

</style>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<div>
  <span>
  <a href="#/" id="sound1" name="names" class="buttonsf">sound1</a><a href="#/" class="fav">X</a></span>

  <span>
  <a href="#/" id="sound2" name="names" class="buttonsf">sound2</a><a href="#/" class="fav">X</a></span>

</div>
<div id="add">



</div>

<script type="text/javascript">
// createListeners is only this now
$(document).on('click', '[name="names"]', playAudio);

// //audio
function playAudio(e) {
  e.preventDefault();
  let el = e.currentTarget;
  var audio = new Audio();
  var src = "http://ice42.securenetsystems.net/POP";
  audio.src = src;
  audio.play();
  return audio;
}

$(document).ready(function() {
  var $ul = $('#add');

  //get items from local storage
  if (localStorage.getItem('vkf-links')) {
    $ul.html(localStorage.getItem('vkf-links'));
  }

  $('.fav').click(function(e) {
    e.preventDefault();
    var x = $(this).prevAll().attr('id');
    // alert( x + " Has Been Added to Favorites");
    $('#add').append('<span><a href="#/" id="' + x + '" name="names" class="buttonsf" onload="createListeners()">' + x + '</a><button id="removebtn" class="remove">x</button><span>');
    //save changes to localstorage
    localStorage.setItem('vkf-links', $ul.html());
  });
  //remove item
  $("#add").on('click', '#removebtn', function() {
    $(this).parent().remove();
    //save changes to localstorage
    localStorage.setItem('vkf-links', $ul.html());
  });
});

</script>
