<?php
if(!isset($_GET['page']))
{
  header("location: gallery.php?page=1");
}
else
{
  $page=$_GET['page'];
}
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LOT - Gallery</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="thumbnail-gallery.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">
	<link rel="icon" href="img/fav.png">

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-3518656843914126",
    enable_page_level_ads: true
  });
</script>
</head>
<body>
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
        <div class="container" id="navbar">
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
                  <li class="active"><a href="index.html">Home</a></li>
                  <!--<li id="sm"><a href="sm.html">Summit Manipal</a></li>-->
                  <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Summit Manipal</a>
                    <ul class="dropdown-menu">
                      <li><a href="sm.html">About Summit</a></li>
                      <li><a href="sm.html#committees">Committees</a></li>
                      <li><a href="#">Register</a></li>
                      </ul>
                      </li>
                  <li id="yp"><a href="yp.html">Youth Parliament</a></li>
                  <li id="cam" ><a href="cam.html">Cambiar</a></li>
                  <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Pages</a>
                    <ul class="dropdown-menu">
                      <li><a href="about.html">About Us</a></li>
                      <li><a href="gallery.php">Gallery</a></li>
                      <li><a href="news.html">News</a></li>
                      <!--<li><a href="index.php">Contact us</a></li>-->
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
<div class="container gallery-container">
    <div class="tz-gallery">

        <div class="row">
<?php
    class Paginator
    {
      private $_conn;
      private $_limit;
      private $_page;
      private $_query;
      private $_total;
    }
    $dir = glob('sm/{*.jpg,*.png}',GLOB_BRACE);
    $picsperpage=6;
    $queries=count($dir);
    $pages=ceil($queries/$picsperpage);
    $start = (($page - 1)*$picsperpage);
    $count=0;
    foreach(array_slice($dir,$start,$picsperpage) as $value)
		{
 ?> 


            <div class="col-sm-6 col-md-4 probootstrap-animate">
                <div class="thumbnail">
                    <a class="lightbox" href="<?php echo $value;?>">
                        <img src="<?php echo $value ;?>" alt="Park">
                    </a>
                </div>
            </div>
           
       
<?php
      }
    echo '<div class="col-md-6 col-md-offset-4 col-sm-14 col-sm-offset-0 col-xs-14 col-xs-offset-0">';
    echo '<ul class="pagination" style=" width:100%;">';
    for($number=1;$number<=$pages;$number++)
    {
      if($number==$page)
      {
        echo '<li class="active">';
      }
      else
      {
        echo '<li>';
      }
        echo '<a href="?page='.$number.'">'.$number.'</a>';
      echo '</li>';
    }
    echo '</ul>';
    echo '</div>';
?>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
<script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>