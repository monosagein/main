<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | ElegoMotors</title>
     <!--CDN LINKS -->
<link rel="stylesheet" href="assets/css/main.css" >
<link rel="stylesheet" href="assets/css/index.css" >
<link rel="stylesheet" href="assets/css/navbar.css" >



 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
 <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
 <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- slider-->
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >

<!-- formlinks -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    label{
        font-size:15px;
    }
    .form-control{
        font-size:15px;
    }
   
    .btn{
        font-size:18px;
        background-color:#1e4b72;
        color:white;
    }
    
  </style>
</head>
   <!--CDN LINKS-->
<body style="background-color:#f0f1f5;">

    <!--Nav section-->
    <?php include "nav.php";?>
     <!-- Ends Nav section-->
    
<!--  Home section  -->
<div class="container"style="margin-top:100px; " >
<div class="row">
    <div class="col-6"style="display:flex;justify-content:left;flex-direction:row; align-items:center;">
        <h1 class="" >Become a Dealer</h1><br>
        <img src="assets/images/form.png" width="250px;" alt="">
    </div>
    <div class="col-6">
        
        <div class="card" style="width:600px; opacity:0.9;border-radius:20px;">
        <h2 class="text-center mt-5"><b>Enquiry Form</b></h2>
        <hr>
        <form class="p-5"action="" method="post">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="email">First Name*</label>
                        <input type="email" class="form-control" id="firstname" placeholder="" name="Name">
                    </div>
                </div><br>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="email">Last Name*</label>
                        <input type="email" class="form-control" id="lastname" placeholder="" name="Name">
                    </div>
                </div>
            </div><br>
            <div class="form-group">
                <label for="email">Email*</label>
                <input type="email" class="form-control" id="email" placeholder="" name="email">
            </div><br>
            <div class="form-group">
                <label for="phone">Phone*</label>
                <input type="number" class="form-control" id="phone" placeholder="" name="phone">
            </div><br>
     <div class="form-group">
        <label for="city">City*</label>
        <input type="text" class="form-control" id="city" placeholder="" name="city">
    </div><br>
    <div class="form-group">
        <label for="Dealership">Dealership Address / Pincode</label>
        <input type="text" class="form-control" id="dealer" placeholder="" name="dealer">
    </div><br>
    <div class="form-group">
        <label for="comment">Comment(Optional)</label>
        <input type="text" class="form-control" id="comment" placeholder="" name="comment">
    </div><br>
    <div class="col-md-12">
        <input type="submit" name="sendmessage" id="sendmessage" class="btn btn-#1e4b72 btn-send  p-2 btn-block btn"value="Submit" >
    </div>
</form>
</div>
</div>
</div>
</div>

<!-- testimonials end -->
      <!-- Site footer -->
    

    <?php include "footer.php";?>
   
  
  <!--footer ends -->
   
   <script>

    function run_gsap(){
        let gsap_loaded = setInterval(function(){
         if(window.gsap && window.ScrollTrigger){
             gsap.registerPlugin(ScrollTrigger);
                 bg_section();
                 bg_section1();
                 bg_section2();
                 bg_section3();
             clearInterval(gsap_loaded);
         }
     }, 3000);
    
        function bg_section(){
            gsap.from('.bg-section',{
                scrollTrigger:{
                    trigger:'.bg-section',
                   
                    start:'top start',
                    end:'bottom ceneter',
                   scrub:2,
                   toggleActions:"restart complete reverse reset",
                },
                width:'85%',
                delay: 0.5,
                duration:2
              
            });
        }

        function bg_section1(){
            gsap.from('.bg-section1',{
                scrollTrigger:{
                    trigger:'.bg-section1',
                    start:'top start',
                    end:'bottom ceneter',
                   // start:'-350px start ',
                   // end: '300 start',
                    scrub:2,
                    toggleActions:"restart complete reverse reset",
                },
                width:'85%',
                delay: 0.5,
                duration:2
            });
        }
        function bg_section2(){
            gsap.from('.bg-section2',{
                scrollTrigger:{
                    trigger:'.bg-section2',
                    start:'top start',
                    end:'bottom ceneter',
                    //start:'-350px center ',
                    //end: '300px center',
                    scrub:0.5,
                    toggleActions:"restart complete reverse reset",
                },
                width:'85%',
                delay: 0.5,
                duration:2
            });
        }
        function bg_section3(){
            gsap.from('.bg-section3',{
                scrollTrigger:{
                    trigger:'.bg-section3',
                    start:'top start',
                    end:'bottom ceneter',
                   // start:'-350px center ',
                   // end: '300px center',
                    scrub:2,
                    toggleActions:"restart complete reverse reset",
                },
                width:'85%',
                delay: 0.5,
                duration:2
            });
        }
    }
    run_gsap();
    
    </script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.0/ScrollTrigger.min.js"></script>
    
  
  

<script>/*
       var aDiv = document.getElementById("animatedDiv");
       var aDiv1 = document.getElementById("animatedDiv1");
       var aDiv2 = document.getElementById("animatedDiv2");
       var aDiv3 = document.getElementById("animatedDiv3");
 
 function changeWidth() 
 {
 
     
     var scrollVal = window.pageYOffset;
     var scrollSlow  = (scrollVal /5);
   
 
      
     
     //Changing CSS Width
     
     aDiv .style.borderRadius = Math.min(Math.max(scrollSlow, 2), 100) + "px";

     aDiv1 .style.borderRadius = Math.min(Math.max(scrollSlow, 2), 100) + "px";
 
     aDiv2 .style.borderRadius = Math.min(Math.max(scrollSlow, 2), 100) + "px";
  
     aDiv3 .style.borderRadius = Math.min(Math.max(scrollSlow, 2), 100) + "px";
     
 }
 
 window.addEventListener('scroll', function() 
 {
     requestAnimationFrame(changeWidth);
 })*/
 
 
 </script>

        
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init({
      offset: 120,
      duration: 1000,
      once:false
     
  });
</script>
<script>
var images = [
	"assets/images/white.png",
  "assets/images/grey.png",
  "assets/images/red.png",
  "assets/images/skybike1.png"
]
var current = 0;
setInterval(function(){
			
  $('#flip').attr('src', images[current]);
  current = (current < images.length - 1)? current + 1: 0;

},2000); /*1000 = 1 sec*/

var images1 = [
	
  "assets/images/grey.png",
  "assets/images/red.png",
  "assets/images/skybike1.png",
  "assets/images/white.png"
  
]
var current1 = 0;
setInterval(function(){
			
  $('#flip1').attr('src', images1[current1]);
  current1 = (current1 < images1.length - 1)? current1 + 1: 0;

},2000); /*1000 = 1 sec*/
var images2 = [
  "assets/images/red.png",
	"assets/images/skybike1.png",
  "assets/images/white.png",
  "assets/images/grey.png"
  
]
var current2 = 0;
setInterval(function(){
			
  $('#flip2').attr('src', images2[current2]);
  current2 = (current2 < images2.length - 1)? current2 + 1: 0;

},2000); /*1000 = 1 sec*/
var images3 = [

	"assets/images/skybike1.png",
  "assets/images/white.png",
  "assets/images/grey.png",
  "assets/images/red.png"


]
var current3 = 0;
setInterval(function(){
			
  $('#flip3').attr('src', images3[current3]);
  current3 = (current3 < images3.length - 1)? current3 + 1: 0;

},2000); /*1000 = 1 sec*/
var images4 = [

"assets/images/skybike1.png",
"assets/images/white.png",
"assets/images/grey.png",
"assets/images/red.png"



]
var current4 = 0;
setInterval(function(){
    
$('#flip4').attr('src', images4[current4]);
current4 = (current4 < images4.length - 1)? current4 + 1: 0;

},2000); /*1000 = 1 sec*/
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</body>
</html>