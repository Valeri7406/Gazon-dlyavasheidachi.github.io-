<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="style.css">
       
        <title><?php bloginfo('name'); ?></title>
        <meta charset="<?php bloginfo('charset'); ?>">
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
   

        <meta name="robots" content="index, follow">

        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        
       <meta name="keywords" content="газон, партерный газон, мавританский газон, нетравянистый газон, 
        спортивный газон,теневыносливый, виды газонов, семена для газонов, земля для газонов, 
        грунт для газона, разбрызгиватель, автополив, ">

<meta name="author" content="admin">

<link href='//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet'/>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

        <?php wp_head(); ?>
    </head>
 <body>
  

        <div class="header">
        <?php 
  $image = has_header_image() ? get_header_image() : get_theme_support( 'custom-header', 'default-image' );
?>
<?php if (has_header_image()): ?>
<img src="<?php echo $image; ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />  
  
  <!--<?php else : ?>
  <a class="navbar-brand" href="/"></> ProgMeRu <small>- статьи и уроки по веб-программированию</small></a>
<?php endif;  ?>--> 

<script>$(document).ready(function(){$(".zvonok").click(function(o){var t=$(this).attr("rel");o.preventDefault(),$(".overlay").fadeIn(200,function(){$("#modal_form").css("display","block").animate({opacity:1,top:"50%"},200)}),document.getElementById("frm").src=t}),$(".zvonok").click(function(o){o.preventDefault(),$(".overlay").fadeIn(200,function(){$("#modal_form").css("display","block").animate({opacity:1,top:"50%"},200)})}),$(".modal_close, .overlay").click(function(){$("#modal_form").animate({opacity:0,top:"45%"},200,function(){$(this).css("display","none"),$(".overlay").fadeOut(100)})})});</script>
  

<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1><br>

<h2><a href="<?php echo home_url(); ?>"><?php bloginfo('description'); ?></a></h2>
            
              
            <?php get_search_form(); ?><br>  
            
             <a href="<?php echo home_url(); ?>"><?php wp_loginout(); ?></a><br>
 
             <a href="<?php echo home_url(); ?>"><?php  wp_register(); ?></a><br>
 
             <div class="address">
 
 <section class="drawing">
       <img src="https://cdn-icons-png.flaticon.com/128/2098/2098567.png">
     </section>
       <div class="search-5">   
 <h3>МО, г. Котельники, Дзержинское шоссе, пл. 7/7<br>
 500м от МКАД, рядом с магазином МЕГА Белая Дача</h3>     
    </div>    
    <div class="search-6">
 <h3>⌚ с 10 ч до 19 ч<br>
 ежедневно без выходных</h3>     
 </div>    
    <div class="search-7">
 
       <p><a href="http://wordpress/2024/02/20/%d0%b7%d0%b0%d0%ba%d0%b0%d0%b7%d0%b0%d1%82%d1%8c-%d0%be%d0%b1%d1%80%d0%b0%d1%82%d0%bd%d1%8b%d0%b9-%d0%b7%d0%b2%d0%be%d0%bd%d0%be%d0%ba/">☎     8(495)215-20-51<br>
        8(800)333-11-57</a></p>
   <h6><a href="http://wordpress/2024/02/20/%d0%b7%d0%b0%d0%ba%d0%b0%d0%b7%d0%b0%d1%82%d1%8c-%d0%be%d0%b1%d1%80%d0%b0%d1%82%d0%bd%d1%8b%d0%b9-%d0%b7%d0%b2%d0%be%d0%bd%d0%be%d0%ba/">Заказать звонок</a></h6>
   </div>       
         </div>
         </div>

   </div>
        <div class="navbar">
            <?php 
            wp_nav_menu();
            ?>
        </div>
        
