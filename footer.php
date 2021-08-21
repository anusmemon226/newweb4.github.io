<div class="footer">
	 <div class="foot_top">
	      <div class="container">
		       <div class="row">
					<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="log">
                            <img src="logo-01.png" width="150px" alt="">
                        </div>
						 <div class="foot_box foot-one">
							 <p><strong>Disclaimer: </strong><br>We offer only editing, proofreading and tutoring services. We do not offer any sort of writing services. You cannot use our work as your own.</p>
						 </div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12" style="border:1px solid transparent;">
						 <div class="foot_box foottwo">
							 <h3>Our Services</h3>
							 <ul>
				       	      <li><a href="essay.php"><i class="fa fa-caret-right"></i>Essay</a></li>
                              <li><a href="assignment.php"><i class="fa fa-caret-right"></i>Assignment</a></li>
                              <li><a href="thesis.php"><i class="fa fa-caret-right"></i>Thesis</a></li>
                              <li><a href="dissertation.php"><i class="fa fa-caret-right"></i>Dissertation</a></li>
				       	   </ul>
						 </div>
					</div>
           			<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
						 <div class="foot_box foot-three">
							 <h3>Useful links</h3>
							 <ul>
			       	        	<li><a href="index.php"><i class="fa fa-caret-right"></i>Home</a></li>
				       	        <li><a href="contact-us.php"><i class="fa fa-caret-right"></i>Contact Us</a></li>
				       	        <li><a href="terms-conditions.php"><i class="fa fa-caret-right"></i>Terms & Condition</a></li>
				       	   </ul>
						 </div>
					</div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
						 <div class="foot_box foot-four">
							 <h3>Contact Us</h3>
                             <div class="top_right">
					   		 <a href="tel:+000000000000" style="color:white;"><span class="top_icon"><i class="fa fa-phone" style="color:white;" aria-hidden="true"></i></span>+00 (000) 000 0000</a>
					    </div>
                        <div class="top_right">
							 <a href="mailto:info@abc.co.uk" style="color:white;"><span class="top_icon"><i class="fa fa-envelope-o" style="color:white;" aria-hidden="true"></i></span>info@abc.co.uk</a> 
						</div> 
						 </div>
					</div>
	           </div>
          </div>
	 </div>
	 <div class="foot_bottom">
        <div class="container">
		    <div class="row">
	             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		             <p class="text-center border border-danger" style="text-align:center;">©2021 abc.co.uk All Rights Reserved.  </p>
			     </div>
			</div>
	    </div>
     </div>
</div>
 
<?php include('modal.php')?>
<script src="code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="js/jquery.hislide.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/owl.carousel.js"></script>    
<script src="js/function.js"></script>  

<script>

function checkform0(theform){
var why = "";

if(theform.CaptchaInput0.value == ""){
why += "- Please Enter CAPTCHA Code.\n";
}
if(theform.CaptchaInput0.value != ""){
if(ValidCaptcha(theform.CaptchaInput2.value) == false){
why += "- The CAPTCHA Code Does Not Match.\n";
}
}
if(why != ""){
alert(why);
return false;
}
}

var a = Math.ceil(Math.random() * 9)+ '';
var b = Math.ceil(Math.random() * 9)+ '';
var c = Math.ceil(Math.random() * 9)+ '';
var d = Math.ceil(Math.random() * 9)+ '';
var e = Math.ceil(Math.random() * 9)+ '';

var code = a + b + c + d + e;
document.getElementById("txtCaptcha0").value = code;
document.getElementById("CaptchaDiv0").innerHTML = code;

// Validate input against the generated number
function ValidCaptcha(){
var str1 = removeSpaces(document.getElementById('txtCaptcha0').value);
var str2 = removeSpaces(document.getElementById('CaptchaInput0').value);
if (str1 == str2){
return true;
}else{
return false;
}
}
function removeSpaces(string){
return string.split(' ').join('');
}
</script>
<script>
      $(window).load(function(){
        setTimeout(function() {
                $('#myModal').modal('show');
        }, 5000);
            });
</script>
<script>
	 $(document).ready(function() {
     $("#owl-demo").owlCarousel({
      autoplay: true,
      autoPlay: 5000, 
      items : 3,
	   itemsDesktop: [1000, 3],
       itemsDesktopSmall: [900, 3],
       itemsTablet: [600,1],
	  center: true,
      loop:true,
	  autoplayHoverPause:true,
	  martSpeed : 1200,
	 navigation : true,
		 
  });
 });
</script>
<script>
	 $(document).ready(function() {
     $("#owl-demo1").owlCarousel({
      autoplay: true,
      autoPlay: 5000, 
      items : 6,
	   itemsDesktop: [1000, 4],
       itemsDesktopSmall: [900, 3],
       itemsTablet: [600,1],
	  center: true,
      loop:true,
	  autoplayHoverPause:true,
	  martSpeed : 1200,
	 navigation : true,
		 
  });
 });
</script>
<script>
$('.counter-count').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 5000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
</script>
<script>
	$('.slide').hiSlide();
</script>
<script>
$('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});
</script>