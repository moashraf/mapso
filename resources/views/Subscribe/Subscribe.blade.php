
<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>

      <!--  الاشتراك  -->

 <div class='wrap' >
  <div class='content'>
    <h3 class="Subscribe_h1">   Get Newsletter</h3>
	<a class='button glyphicon  shran ' href='#' style=" 
	 bottom: auto;
    top: 10px;      font-size: 18px;
    color: #0091b3;
    transform: rotate(182deg);  
    background: #ffffff;
    padding: 7px;    " >  
    <i class="fa fa-times" aria-hidden="true"></i>

 </a>
  <div class="subscribe-widget">
<!-- form -->
<form id="subscribe-form"  action="{{ URL::to('/Subscribe')  }} " >
     {{ csrf_field() }}

<input type="email" name="Subscribe_email" placeholder="Your Email Please" class=" form-control  Subscribe_input " required="required">
<button type="submit" class="Subscribe_button" >Subscribe</button>
        <a   href='{{ URL::to('/facebook')  }}'>   <i class="fa fa-facebook" aria-hidden="true"></i></a>

 <div class="alert alert-success"   id="successsuccess_alert"  style="display: none;">
  <strong  id="successsuccess"  style="color: #6dab3c;
    font-weight: bold;">  </strong>  
</div>
<br><br><br>

</form>


<!-- end form-->
</div>
   </div>
</div>

        <a class='button glyphicon  shran' href='#'>   <i class="fa fa-bookmark" aria-hidden="true"></i></a>

            <!--  الاشتراك -->
<script>

 




$('.shran').on('click', function(){
  $('.wrap, a').toggleClass('active');
  
  return false;
});




$('.Subscribe_button').on('click', function(){
  var form=$('#subscribe-form').serialize();
  var urlvar=$('#subscribe-form').attr('action');
 
$.ajax({
            url: urlvar,
            type: "post",
            data: form ,
            beforeSend : function(){    $('#successsuccess').empty();
 },
error:function(error,exception){ 
 	alert("error");},
            success: function (data) {
 
 document.getElementById("successsuccess_alert").style.display = "block";
  $('#successsuccess').append(data);

      setTimeout(function(){  $('#successsuccess').empty(); $('.wrap, a').removeClass('active');  }, 3000);


   

 
              }    });


   return false;
});


 </script>