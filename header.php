<?php 
/*if (!($_SERVER['REMOTE_ADDR'] == "85.80.139.33" || $_SERVER['REMOTE_ADDR'] == "12.242.126.248" || $_SERVER['REMOTE_ADDR'] == "93.167.81.210" || $_SERVER['REMOTE_ADDR'] == "212.242.126.248")) {
  header("location: http://www.borgerlyst.dk/index.html");
}/**/
?><!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <meta name="author" content="Laust Johan Deleuran - ljd.dk" />
  <meta name="title" content="Borgerlyst" /> 
  <meta name="description" content="Socialt eksperimentarium, der gør det nemmere, sjovere og mere spontant at bruge sin stemme og sin handlekraft." /> 
  <link rel="image_src" href="http://www.borgerlyst.dk/photos/borgerlyst.jpg" />
  <link type="image/x-icon" rel="shortcut icon" href="favicon.ico" /> 
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/screen.css" media="screen, projection" />
  <title>Borgerlyst.dk</title>
  <?php wp_head(); ?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-16654592-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</head>
<body>

<div class="wrapper">

    <div class="header" id="header">
        <div class="nav group" id="main-navigation">
            <ul>
                <?php wp_list_pages('title_li=&include=24, 331, 334, 498, 537'); ?>
            </ul>
            <ul class="blog">
                <li><a href="/kontakt">Kontakt</a></li>
            </ul>
        </div>
        
        <h1 id="logo"><a href="/">Borgerlyst</a></h1>
        
        <div class="nav group" id="featured-navigation">
            <ul>
                <?php wp_list_pages('depth=0&title_li=&include=26, 484, 496, 541, 949'); ?>
            </ul>
        </div>
    </div>