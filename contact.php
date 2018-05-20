<?php
if(isset($_POST['submit'])) 
{

$message=
'Full Name:	'.$_POST['fullname'].'<br />
Subject:	'.$_POST['subject'].'<br />
Phone:	'.$_POST['phone'].'<br />
Email:	'.$_POST['emailid'].'<br />
Comments:	'.$_POST['comments'].'
';
    require "PHPMailer-master/class.phpmailer.php"; //include phpmailer class
      
    // Instantiate Class  
    $mail = new PHPMailer();  
      
    // Set up SMTP  
    $mail->IsSMTP();                // Sets up a SMTP connection  
    $mail->SMTPAuth = true;         // Connection with the SMTP does require authorization    
    $mail->SMTPSecure = "ssl";      // Connect using a TLS connection  
    $mail->Host = "smtp.gmail.com";  //Gmail SMTP server address
    $mail->Port = 465;  //Gmail SMTP port
    $mail->Encoding = '7bit';
    
    // Authentication  
    $mail->Username   = "leaders.manipal@gmail.com"; // Your full Gmail address
    $mail->Password   = "bestclubever<3"; // Your Gmail password
      
    // Compose
    $mail->SetFrom($_POST['emailid'], $_POST['fullname']);
    $mail->AddReplyTo($_POST['emailid'], $_POST['fullname']);
    $mail->Subject = "New Contact Form Enquiry";      // Subject (which isn't required)  
    $mail->MsgHTML($message);
 
    // Send To  
    $mail->AddAddress("leaders.manipal@gmail.com", "Contact Form"); // Where to send it - Recipient
    $result = $mail->Send();		// Send!  
	$message = $result ? '<div class="alert alert-success" role="alert"><strong>Success!</strong>Message Sent Successfully!</div>' : '<div class="alert alert-danger" role="alert"><strong>Error!</strong>There was a problem delivering the message.</div>';  

	unset($mail);

}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <title>Leaders Of Tomorrow</title>
    <meta name="description" content="Free Bootstrap Theme by ProBootstrap.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
	<link rel="icon" href="img/fav.png">
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-9517922595339120",
    enable_page_level_ads: true
  });
</script>
  </head>
  <body>
  <!--
    <div class="probootstrap-search" id="probootstrap-search">
      <a href="#" class="probootstrap-close js-probootstrap-close"><i class="icon-cross"></i></a>
      <form action="#">
        <input type="search" name="s" id="search" placeholder="Search a keyword and hit enter...">
      </form>
    </div>
    -->
    <div class="probootstrap-page-wrapper">
      <!-- Fixed navbar -->
      
      <div class="probootstrap-header-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9 probootstrap-top-quick-contact-info">
              <span><i class="icon-location2"></i>Manipal, Karnataka 576104, India</span>
              <span><i class="icon-phone2"></i>+91 8106824646</span>
              <span><i class="icon-mail"></i>leaders.manipal@gmail.com</span>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 probootstrap-top-social">
              <ul>
                
                <li><a href="https://www.facebook.com/lotmanipal/"><i class="icon-facebook2"></i></a></li>
                <li><a href="https://www.instagram.com/lotmanipal/?hl=en"><i class="icon-instagram2"></i></a></li>
                
                
              </ul>
            </div>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-default probootstrap-navbar">
        <div class="container">
          <div class="navbar-header">
            <div class="btn-more js-btn-more visible-xs">
              <a href="#"><i class="icon-dots-three-vertical "></i></a>
            </div>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html" title="Home">Leaders Of Tomorrow</a>
          </div>

          <div id="navbar-collapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.html">Home</a></li>
              <li id="sm"><a href="sm.html">Summit Manipal</a></li>
              <li id="yp"><a href="yp.html">Youth Parliament</a></li>
              <li id="cam" ><a href="cam.html">Cambiar</a></li>
              <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Pages</a>
                <ul class="dropdown-menu">
                  <li><a href="about.html">About Us</a></li>
                  <li><a href="gallery.php">Gallery</a></li>
                  <li><a href="news.html">News</a></li>
				  <li><a href="contact.php">Contact us</a></li>
                  <!--<li><a href="gallery.html">Gallery</a></li>
                  <li class="dropdown-submenu dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle"><span>Gallery</span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Summit Manipal</a></li>
                      <li><a href="#">Youth Parliament</a></li>
                      <li><a href="#">Cambiar</a></li>
                      <!--<li><a href="#">Second Level Menu</a></li>-->
                    </ul>
                  </li>
                  <!--<li><a href="news.html">News</a></li>-->
                </ul>
              </li>
              <!--<li><a href="contact.php">Contact us</a></li>-->
            </ul>
          </div>
        </div>
      </nav>

  	<div class="contactform">
  	<div class="panel panel-default">
  		<div class="panel-heading">
    	<h3 class="panel-title"><a href="">Contact Form</a></h3>
    	</div>
    	<div class="panel-body">
    	<form name="form1" id="form1" action="" method="post">
    			<fieldset>
    			  <input type="text" class="form-control" name="fullname" placeholder="Full Name" />
    			  <br />
    			  <input type="text" class="form-control" name="subject" placeholder="Subject" />
    			  <br />
    			  <input type="text" class="form-control" name="phone" placeholder="Phone" />
    			  <br />
    			  <input type="email" class="form-control" name="emailid" placeholder="Email" />
    			  <br />
    			  <textarea rows="4" class="form-control" cols="20" name="comments" placeholder="Comments"></textarea>
    			  <br />
    			  <input type="submit" class="btn btn-success"name="submit" value="Send Message" />
    			</fieldset>
    	</form>
    	<p><?php if(!empty($message)) echo $message; ?></p>
    	</div>
	</div>
	</div>
	<footer class="probootstrap-footer probootstrap-bg">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="probootstrap-footer-widget">
                <h3>Social</h3>
                <ul class="probootstrap-footer-social">
                  <li><a href="https://www.facebook.com/lotmanipal/"><i class="icon-facebook"></i></a></li>
                  <li><a href="https://www.instagram.com/lotmanipal/?hl=en"><i class="icon-instagram2"></i></a></li>
                </ul>
              </div>
            </div>
            <!--<div class="col-md-3 col-md-push-1">
              <div class="probootstrap-footer-widget">
                <h3>Links</h3>
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Courses</a></li>
                  <li><a href="#">Teachers</a></li>
                  <li><a href="#">News</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
              </div>
            </div>-->
            <div class="col-md-4">
              <div class="probootstrap-footer-widget">
                <h3>Contact Info</h3>
                <ul class="probootstrap-contact-info">
                  <li><i class="icon-location2"></i> <span>Leaders Of Tomorrow, Manipal Institute Of Technology, Manipal, Karnataka, 576104</span></li>
                  <li><i class="icon-mail"></i><span>leaders.manipal@gmail.com</span></li>
                  <li><i class="icon-phone2"></i><span>+91 8106824646</</span></li>
                </ul>
              </div>
            </div>
           
          </div>
          
          
        </div>

        <!--<a href="http://www.reliablecounter.com" target="_blank"><img src="http://www.reliablecounter.com/count.php?page=leadersoftomorrow.info&digit=style/plain/14/&reloads=0" alt="www.reliablecounter.com" title="www.reliablecounter.com" border="0"></a><br /><a href="http://www.reliablecounter.com/sv/" target="_blank" style="font-family: Geneva, Arial; font-size: 9px; color: #330010; text-decoration: none;">reliablecounter.com</a>-->
      </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	
    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
