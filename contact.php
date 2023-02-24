


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | ElegoMotors</title>
     <!--favicon -->
    <link rel="icon" type="image/x-icon" href="assets\images\favicon.png">
    <!--discription -->
    <meta name="description" content="">
    <!--keywords -->
    <meta name="keywords" content="">
      <!--canonical -->
    <link rel="canonical" href="" />
    <link rel="stylesheet" href="assets\css\main.css" >
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

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
    </head>
    
    <body style="background-color:#f0f1f5; margin-top:80px;">

     <!--Nav section-->
     <?php include "nav.php";?>
     <!-- Ends Nav section-->
    <div class="container animated fadeIn">
    
      <div class="row">
        <h2 class="header-title ml-5"  style="text-align:center;">Contact</h2>
        <hr><br>
        <div class="col-sm-12" id="parent">
            <div class="col-sm-6 rounded-lg">
                <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d242624.07631159681!2d74.82118870074189!3d18.163859017676796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc3807c2c363179%3A0xdfad24acdfb582b2!2sElego%20Motors%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1674649638685!5m2!1sen!2sin" width="100%" height="300" style="border:0; " allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
           
            </div>
    
            <div class="col-sm-6">
                <form action="sendMail.php" class="contact-form" method="post">
        
                    <div class="form-group">
                      <input type="text" class="form-control" id="name" name="username" placeholder="Name" required="" autofocus="">
                    </div>
                
                
                    <div class="form-group form_left">
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">
                    </div>
                
                  <div class="form-group">
                       <input type="text" class="form-control" id="phone" name="phone" maxlength="10" placeholder="Mobile No." required="">
                  </div>
                  <div class="form-group">
                      <textarea class="form-control textarea-contact"  name= "message" rows="5" id="comment"\
                        placeholder="Type Your Message/Feedback here..." required=""></textarea>
                        <br>
                      <button  name="submit-form" class="btn btn-default btn-send"> <span class="glyphicon glyphicon-send"></span> Send Message </button>
                  </div>
                 </form>
            </div>
        </div>
      </div>
    
      <div class="container second-portion mb-5">
        <div class="row">
            <!-- Boxes de Acoes -->
            <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="box bg-white" style="border-radius:20px;">							
                    <div class="icon">
                        <div class="image"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                        <div class="info">
                            <h3 class="title">MAIL & WEBSITE</h3>
                            <p>
                                <i class="fa fa-envelope" aria-hidden="true"></i> &nbsp <a href="mailto:info@elegomotors.com">info@elegomotors.com</a>
                                <br>
                                <br>
                                <i class="fa fa-globe" aria-hidden="true"></i> &nbsp<a href="http:\\elegomotors.com"> www.elegomotors.com</a>
                            </p>
                        
                        </div>
                    </div>
                    <div class="space"></div>
                </div> 
            </div>
                
            <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="box bg-white" style="border-radius:20px;">							
                    <div class="icon">
                        <div class="image"><i class="fa fa-mobile" aria-hidden="true"></i></div>
                        <div class="info">
                            <h3 class="title">CONTACT</h3>
                            <p>
                                <i class="fa fa-mobile" aria-hidden="true"></i> &nbsp <a href="tel: +91 8265091207"> +91 82650 91207</a>

                                <br>
                                <br>
                            </p>
                        </div>
                    </div>
                    <div class="space"></div>
                </div> 
            </div>
                
            <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="box bg-white" style="border-radius:20px;">							
                    <div class="icon">
                        <div class="image"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                        <div class="info">
                            <h3 class="title">ADDRESS</h3>
                            <p>
                                 <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp Near Sadhna Sahkari Bank, Kedgaon Choufula (Pune-Solapur Highway), Tal. Daund, Dist. Pune - 412 203 Maharasht 
                                 
                            </p>
                        </div>
                    </div>
                    <div class="space"></div>
                </div> 
            </div>		    
            <!-- /Boxes de Acoes -->
            
            <!--My Portfolio  dont Copy this -->
            
        </div>
      </div>
    
    </div>
  <?php include 'footer.php';?>
            </body>
</html>