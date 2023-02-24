<button onclick="topFunction()" id="myBtn" title="Go to top"><b>^</b></button>
      <script>
// Get the button
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>




<footer class="mainfooter mt-5" role="contentinfo">
  <div class="footer-middle">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <!--Column1-->
        <div class="footer-pad">
          <h4>About Us</h4>
        <p>A dream of two individuals which turned into an entrepreneurial reality. They devised innovative ideas to ensure Elego, the new-generation electric scooter made a significant impact in every sense.</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <!--Column1-->
        <div class="footer-pad">
          <h4>Useful Links</h4>
          <ul class="list-unstyled">
            <li><a href="features.php">Products</a></li>
            <li><a href="test-ride.php">Test Ride </a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="contact.php">Contact Us</a></li>
             <li><a href="dealer-enq.php">Dealership Enquiry</a></li>
           
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <!--Column1-->
        <div class="footer-pad">
          <h4>Contact Us</h4>
          <address>
                    Elego Motors <br>
                    Visit us: Near Sadhna Sahkari Bank, Kedgaon Choufula (Pune-Solapur Highway), Tal. Daund, Dist. Pune - 412 203 Maharashtra.<br>
                    +91 82650 91207<br>
                    info@elegomotors.com<br>
                    
                  
                </address>
          
        </div>
      </div>
    	<div class="col-md-3">
    		<h4>Follow Us</h4>
            <ul class="social-network social-circle">
             <li><a href="https://www.facebook.com/profile.php?id=100086239167610" class="icoFacebook" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
             <li><a href="https://www.instagram.com/elego_motors/" class="icoInstagram" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a></li>
            </ul>				
		</div>
    </div>
	<div class="row">
		<div class="col-md-6 copy">
			<p class="text-center">&copy; Copyright 2023 - ElegoMotors.  All rights reserved.</p>
		</div>
		<div class="col-md-6 copy">
			<p class="text-center">Powered by: <a href="https://monosage.com">Monosage</a></p>
		</div>
	</div>


  </div>
  </div>
</footer>