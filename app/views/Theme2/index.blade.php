<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>

<!-- Basic Page Needs ================================================== 
================================================== -->

<meta charset="utf-8">
<title>Mecatec Peru</title>
<meta name="description" content="Place to put your description text">
<meta name="author" content="">
<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

<!-- Mobile Specific Metas ================================================== 
================================================== -->

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

<!-- CSS ==================================================
================================================== -->

<!--<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/skeleton.css">
<link rel="stylesheet" href="css/screen.css">
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" />
-->
{{HTML::style('assets2/css/base.css');}}
{{HTML::style('assets2/css/skeleton.css');}}
{{HTML::style('assets2/css/screen.css');}}
{{HTML::style('assets2/css/prettyPhoto.css');}}

<!-- Favicons ==================================================
================================================== -->

<!--<link rel="shortcut icon" href="images/favicon.png">

<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
-->

<link rel="shortcut icon" href={{asset('assets2/images/favicon.png');}}>
<link rel="apple-touch-icon" href={{asset('assets2/images/apple-touch-icon.png');}}>
<link rel="apple-touch-icon" sizes="72x72" href={{asset('assets2/images/apple-touch-icon-72x72.png');}}>
<link rel="apple-touch-icon" sizes="114x114" href={{asset('assets2/images/apple-touch-icon-114x114.png');}}>

<!-- Google Fonts ==================================================
================================================== -->

<link href='http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<body>

<!-- Home - Content Part ==================================================
================================================== -->
<div id="header">
  <div class="container header"> 
    <!-- Header | Logo, Menu
		================================================== -->
    <header>
      <div class="logo"><a href="index.html"><img width="250" src="{{asset('assets2/images/logo2.png');}}" alt="" /></a></div>
      <div class="mainmenu">
        <div id="mainmenu">
          <ul class="sf-menu">
            <li><a href="principal" id="visited"><span class="home"><img src="{{asset('assets2/images/home.png');}}" alt="" /></span>Home</a></li>
            <li><a href="about.html"><span class="home"><img src="{{asset('assets2/images/about.png');}}" alt="" /></span>About</a></li>
            <li><a href="portfolio.html"><span class="home"><img src="{{asset('assets2/images/portfolio.png');}}" alt="" /></span>Portfolio</a>
              <ul>
                <li><a href="gallery.html">Portfolio Gallery</a></li>
              </ul>
            </li>
            <li><a href="blog.html"><span class="home"><img src="{{asset('assets2/images/blog.png');}}" alt="" /></span>Blog</a>
              <ul>
                <li><a href="singleblog.html">Single Post</a></li>
              </ul>
            </li>
            <li><a href="features.html"><span class="home"><img src="{{asset('assets2/images/features.png');}}" alt="" /></span>features</a></li>
            <li><a href="contact.html"><span class="home"><img src="{{asset('assets2/images/contact.png');}}" alt="" /></span>Contact</a></li>
          </ul>
        </div>
        
        <!-- Responsive Menu -->
        
        <form id="responsive-menu" action="#" method="post">
          <select>
            <option value="">Navigation</option>
            <option value="index.html">Home</option>
            <option value="about.html">About</option>
            <option value="portfolio.html">Portfolio</option>
            <option value="gallery.html">Portfolio Gallery</option>
            <option value="blog.html">Blog</option>
            <option value="singleblog.html">Single Post</option>
            <option value="features.html">Features</option>
            <option value="contact.html">Contact</option>
          </select>
        </form>
      </div>
    </header>
  </div>
</div>
<!-- Home Content Part - Slider ==================================================
================================================== -->
<div class="flexslider">
  <ul class="slides">
    <li> <a href="#"><img src="{{asset('assets2/images/flexslider/img4.jpg');}}" width="4000" alt=""/></a> </li>
    <li> <img src="{{asset('assets2/images/flexslider/img2.jpg');}}" width="4000" alt="" /> </li>
    <li> <a href="#"><img src="{{asset('assets2/images/flexslider/img3.jpg');}}" alt="" /></a>
    </li>
  </ul>
</div>
<!-- Home Content Part - Box One ==================================================
================================================== -->
<div class="blankSeparator"></div>
<div class="container">
  <div class="info">
    <div class="one_third">
      <h2>Mecatec Peru</h2>
      <p>Nuestro nuevo <span class="red">portal web</span>. Es el nuevo medio para contactarnos con nuestros clientes y que puedan conocer más acerca de nosotros y de nuestros servicios, de una manera <span class="green">diferente y dinámica</span> desde diferentes lugares.</p>
    </div>
    <div class="two_third lastcolumn">
      <div class="one_half">
        <h2>Portafolio de Noticias</h2>
        <p>Por este medio se les podra <span class="red">comunicar</span> nuestros nuevos servicios y/u ofertas de temporada. Mantengase informado de los diferentes precios y nuevos repuestos que llegan.</p>
     </div>
      <div class="one_half lastcolumn">
        <h2>Nuestro Servicio</h2>
        <p> No solo contamos con reparación de maquinaria pesada, sino también con mantenimiento y además venta de los repuestos que necesite su <span class="red">maquinaria</span> Mantengase en <span class="green">contacto</span> con nosotros para lo que necesite</p>
      </div>
    </div>
  </div>
</div>
<!-- container ends here --> 
<!-- Home Content Part - Box Two ==================================================
================================================== -->
<div class="container clients">
  <div class="sepContainer"></div>
  <h2>Our Clients</h2>
  <div class="one_sixth"> <img src="images/client1.jpg" alt=""/> </div>
  <!-- end one_sixth -->
  <div class="one_sixth"> <img src="images/client2.jpg" alt=""/> </div>
  <!-- end one_sixth -->
  <div class="one_sixth"> <img src="images/client3.jpg" alt=""/> </div>
  <!-- end one_sixth -->
  <div class="one_sixth"> <img src="images/client4.jpg" alt=""/> </div>
  <!-- end one_sixth -->
  <div class="one_sixth"> <img src="images/client5.jpg" alt=""/> </div>
  <!-- end one_sixth -->
  <div class="one_sixth lastcolumn"> <img src="images/client6.jpg" alt=""/> </div>
  <!-- end one_sixth lastCol --> 
</div>
<!-- end container --> 
<!-- Home Content Part - Box Three ==================================================
================================================== -->
<div class="container boxthree">
  <div class="sepContainer1"><!-- --></div>
  <div class="blankSeparator"></div>
  <div class="one_third">
    <section class="boxthreeleft"> <img src="images/home/1.png" alt=""/>
      <h3>Natural beauty</h3>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
      <a class ="simple" href="#">+ Learn more</a> </section>
  </div>
  <!-- one-third column ends here -->
  <div class="one_third">
    <section class="boxthreecenter"> <img src="images/home/2.png" alt=""/>
      <h3>Fashion Love</h3>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
      <a class ="simple" href="#">+ Learn more</a> </section>
  </div>
  <!-- one-third column ends here -->
  <div class="one_third lastcolumn">
    <section class="boxthreeright"> <img src="images/home/3.png" alt=""/>
      <h3>Modern Design Interior</h3>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
      <a class ="simple" href="#">+ Learn more</a> </section>
  </div>
  <!-- one-third column ends here --> 
</div>
<!-- container ends here -->
<div class="blankSeparator1"></div>

<!--Footer ==================================================
================================================== -->
<div id="footer">
  <div class="container footer">
    <div class="one_fourth">
      <h3>Latest Tweets</h3>
      <div id="tweets"></div>
    </div>
    <div class="one_fourth">
      <h3>Blogroll</h3>
      <ul>
        <li class="lines"><a href="#" title="">Development Blog</a></li>
        <li class="lines"><a href="#" class="">New Freebies</a></li>
        <li class="lines"><a href="#" class="">Themeforest Theme</a></li>
        <li class="lines"><a href="#" class=""> Design News</a></li>
        <li class="lines"><a href="#" class="">WordPress Theme</a></li>
      </ul>
    </div>
    <div class="one_fourth">
      <h3>Archive</h3>
      <ul>
        <li class="lines"><a href="#" class=""> August 2012</a></li>
        <li class="lines"><a href="#" class="">July 2012</a></li>
        <li class="lines"><a href="#" class="">Juny 2012</a></li>
        <li class="lines"><a href="#" class=""> May 2012</a></li>
        <li class="lines"><a href="#" class="">April 2012</a></li>
      </ul>
    </div>
    <div class="one_fourth lastcolumn">
      <h3>About</h3>
      <p>Proximet is responsive, simple and clean template with a lot attention to detail. Get it now!</p>
      <p>Visit <a href="http://anarieldesign.com/" rel="nofollow">Anariel Design</a> and find more interesting things.</p>
    </div>
  </div>
  <!-- container ends here --> 
</div>
<!-- footer ends here --> 
<!-- Copyright ==================================================
================================================== -->
<div id="copyright">
  <div class="container">
    <div class="eleven columns alpha">
      <p class="copyright">&copy; Copyright 2012. &quot;Proximet&quot; by <a href="http://www.anarieldesign.com/" rel="nofollow">Anariel Design</a>. All rights reserved.</p>
    </div>
    <div class="five columns omega">
      <section class="socials">
        <ul class="socials fr">
          <li><a href="#"><img src="images/socials/twitter.png" class="poshytip" title="Twitter"  alt="" /></a></li>
          <li><a href="#"><img src="images/socials/facebook.png" class="poshytip" title="Facebook" alt="" /></a></li>
          <li><a href="#"><img src="images/socials/google.png" class="poshytip" title="Google" alt="" /></a></li>
          <li><a href="#"><img src="images/socials/dribbble.png" class="poshytip" title="Dribbble" alt="" /></a></li>
        </ul>
      </section>
    </div>
  </div>
  <!-- container ends here --> 
</div>
<!-- copyright ends here --> 
<!-- End Document
================================================== --> 
<!-- Scripts ==================================================
================================================== --> 


{{HTML::script('assets2/js/jquery-1.8.0.min.js');}}
{{HTML::script('assets2/js/screen.js');}}
{{HTML::script('assets2/js/poshytip-1.0/src/jquery.poshytip.min.js');}}
{{HTML::script('assets2/js/tabs.js');}}
{{HTML::script('assets2/js/jquery.tweetable.js');}}
{{HTML::script('assets2/js/jquery.prettyPhoto.js');}}
{{HTML::script('assets2/js/superfish.js');}}
{{HTML::script('assets2/js/hoverIntent.js');}}
{{HTML::script('assets2/js/jquery.flexslider-min.js');}}
{{HTML::script('assets2/js/modernizr.custom.29473.js');}}

</head>
</body>
</html>