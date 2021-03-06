<!-- edit by orange -->
<?php



if(isset($_GET['lang'])){
	//$lang = $_GET['lang'];
	$lang =	qtrans_getLanguage();
	$_SESSION['lang'] = $lang;
}else{
	//$lang = (isset($_SESSION['lang']))?$_SESSION['lang']:'en';
	$lang = (isset($_SESSION['lang']))?$_SESSION['lang']:qtrans_getLanguage();
}
include('lang2.php');
?>

<!-- end edit by orange -->
<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
  <!-- <meta name="viewport" content="width=device-width"/> -->
  <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">-->
  <meta id="viewport" name="viewport" content ="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no" />
  <!-- <meta name="viewport" content="initial-scale=1,user-scalable=no"> -->
 

  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <!-- <title>DIR4FILMS ผลิตรายการทีวี Production House Thailand Shooting in Thailand Thailand Production House Thailand TV Program</title> -->
  <title>DIR4FILMS Production House Thailand Shooting in Thailand Thailand Production House Thailand TV Program</title>
  <meta name="description" content="DIR4, a production house based in Bangkok, Thailand, which provides premium full-serviced production and quality production supports. We are specialized in cosmetic and fashion commercials and TV production with stunning artistic visual and naturally expressed.  Make your production be more aesthetic craft work with international directors and professional crews that come with supreme quality.Production House Thailand Shooting in Thailand Thailand Production House Thailand TV Program ผลิตรายการทีวี ">
  <meta name="keywords" content="Production House Thailand,Shooting in Thailand,Thailand Production House,Thailand TV Program,ผลิตรายการทีวี">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/normalize.css" media="all" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/fontello.css" media="all" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/fancybox/jquery.fancybox-1.3.4.css" media="all" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" media="all" />
  
<?php if (false): ?>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/dir4main.css" media="all"  />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/dir4films.css" media="all" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/dir4tv.css" media="all" />
<?php endif; ?>
  <script src="<?php bloginfo('template_url'); ?>/js/vendor/modernizr-2.6.1.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/iscroll.js"></script>
  
  <!-- edit by orange -->
  	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/sliderkit-core.css" media="screen, projection" />	
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/supersized.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/supersized.shutter.css" type="text/css" media="screen" />
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/orange/js/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/orange/js/jquery.easing.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/orange/js/supersized.3.2.7.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/orange/js/supersized.shutter.min.js"></script>
	
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/orange/external/jquery.easing.1.3.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/orange/external/jquery.mousewheel.min.js"></script>
	
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/orange/sliderkit/jquery.sliderkit.1.9.2.pack.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/orange/jquery.fadeloader.js"></script>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/orange.css" />
  <!-- end edit by orange -->
  
  <?php wp_head(); ?>

<script type="text/javascript">
	/*$(document).ready(function(){
		$(".search-box").click(function(){
			$(".search-box-label").hide();
		} );
		$(".search-box").blur(function(){
			$(".search-box-label").show();
		} );
	});*/

</script>
</head>

<body <?php body_class(); ?> <?php if ($post) echo 'id="page-'.$post->post_name.'"' ; ?>>
<?php 
	$department = '';
	$department_class = '';
	
	$department = get_department();
	$department_class = $department;
	
	DEFINE('department', str_replace('dir4', 'dir4-', $department));
  if ($department == '4by4') $department_class = 'fbyf';
	
	//echo 'dept = '.$department; exit;
	/*
if (is_subpage()) {
  $department = is_subpage();
  $department_class = $department;
  if ($department == '4by4') $department_class = 'fbyf';
}
if ('people' == get_post_type()) {
   $department = 'dir4films';
   $department_class = 'dir4films';
} else if (in_category(array(20, 21, 22))) {
	$department = 'dir4tv';
   $department_class = 'dir4tv';
   echo 'in dir4tv';
}*/
?>
<div class="home-btn">
	<a href="<?php echo get_home_url();?>">
		<div class="homeitem">
			<?php if($department != 'dir4tv'){?>
				<img src="<?php bloginfo('template_url');?>/images/home-01.svg">
			<?php }else{ ?>
				<img src="<?php bloginfo('template_url');?>/images/home-01-black.svg">
			<?php } ?>
		</div>
		<!-- <div class="text">HOME</div> -->
	</a>
	
</div>

<div class="social-nav orange-social">
     	<a target="_blank" href="https://www.facebook.com/dir4films" class="fs"><i class="icon-facebook"></i></a>
     	<a target="_blank" href="https://vimeo.com/dir4" class="vm"><i class="icon-vimeo"></i></a>
     	<a target="_blank" href="http://instagram.com/dir4films" class="ig"><i class="icon-instagram-filled"></i></a>
     </div>


<div class="dir4main <?php echo $department_class; ?>">
<div class="dir4wrap">
	
  	<?php if (is_category()) {
  		global $post;
  		$category = get_category( get_query_var( 'cat' ) );
  		if ($category):
  			$category_id = $category->cat_ID;
		  	define('category_id', $category_id);
		  	$parent = $category->category_parent;
		  	
		  	//echo 'parent cate id = '.print_r($parent);
	  	endif;
  	} ?>
	<div class="left-column main-navigation">
    <div class="left-super-column border">
     <a  class="column-label ir"></a>
     
     <!--
<div class="social-nav">
     	<a target="_blank" href="https://www.facebook.com/dir4films" class="fs"><i class="icon-facebook"></i></a>
     	<a target="_blank" href="https://vimeo.com/dir4" class="vm"><i class="icon-vimeo"></i></a>
     	<a target="_blank" href="http://instagram.com/dir4films" class="ig"><i class="icon-instagram-filled"></i></a>
     	<a target="_blank" href="https://twitter.com/Dir4films" class="tw"><i class="icon-twitter"></i></a>
     </div>
-->
    </div>
    <div class="left-column-wrapper">
      <a class="brand" href="<?php echo get_permalink( get_page_by_path( 'dir4-home' ) ) ?>"></a>
      <!--
<div class="language-bar">
        <ul class="language-list clearfix">
          <li class="language-item active"><a href="#">EN</a></li>
          <li class="language-item"><a href="#">FR</a></li>
          <li class="language-item"><a href="#">CN</a></li>
          <li class="language-item"><a href="#">JP</a></li>
        </ul>
      </div>
-->

      <div class="right-solid-bar"></div>

      <div class="nav-wrapper nav-orange-fix">
        <ul class="nav main-nav" id="nav-dir4main">
          <li class="subnav" subnav="dir4-our-service">
            <a class="main-nav-item" href="<?php echo get_permalink( get_page_by_path( 'dir4-about' ) ) ?>">
                <span class="nav-num">01</span><span class="nav-title"><?php echo($menu1); //About Us?></span></a>
            
            <ul class="nav-submenu subnav-big" id="subnav-dir4-our-service">
              <li class="subnav-item"> <a href="<?php echo get_permalink( get_page_by_path( 'dir4films/dir4films-featured-work' ) ) ?>">
                <span class="black">DIR</span>
                <span class="orange">4</span><br/>
                <span class="palegold">FILMS</span>
              </a></li>
              <li class="subnav-item"> <a href="#">
                <span class="black">DIR</span>
                <span class="orange">4</span>
                <span class="palegold">TV</span>
              </a></li>
              <li class="subnav-item"> <a href="#">
                <span class="black">4BY</span>
                <span class="orange">4</span>
              </a></li>
              <li class="subnav-item"> <a href="#">
                <span class="black">PRODUC-<br>TION</span>
                <span class="orange">SUPPORT</span>
              </a></li>
            </ul>
          </li>
          <li>
             <a class="main-nav-item" href="<?php echo get_permalink( get_page_by_path( 'news-all' ) ) ?>" >
              <span class="nav-num">02</span><span class="nav-title"><?php echo($menu2); //News?></span>
            </a>
          </li>
          <li>
             <a class="main-nav-item" href="<?php echo get_permalink( get_page_by_path( 'dir4-our-service' ) ) ?>" subnav="dir4-our-service">
              <span class="nav-num">03</span><span class="nav-title"><?php echo($menu3); //Our Services ?></span>
            </a>
          </li>
          <li class="subnav">
           
            <a class="main-nav-item" href="<?php echo get_post_type_archive_link( 'clients' ) ?>">
            <span class="nav-num">04</span><span class="nav-title"><?php echo($menu4); //Our Clients?></span></a>
               <ul class="nav-submenu" id="subnav-dir4-about-dir4-company">
                <li class="subnav-header">
                  <span class="black">COMPANY</span><br/>
                  <span class="palegold">PROFILE</span>
                </li>
                <li class="subnav-item"><a href="<?php echo get_permalink( get_page_by_path( 'dir4-about/dir4-company-overview' ) ); ?>">Company Overview</a></li>
                <li class="subnav-item"><a href="<?php echo get_permalink( get_page_by_path( 'dir4-about/dir4-mission-statement' ) ); ?>">Mission Statement</a></li>
                <li class="subnav-item"><a href="<?php echo get_permalink( get_page_by_path( 'dir4-about/dir4-objective' ) ); ?>">Objectives</a></li>
                <li class="subnav-item pdfdownload"><a href="http://www.dir4films.com/files/company_profile.pdf" target="_blank">Company Profile<br/>PDF Download</a></li>
              </ul>
          </li>
          <li><a class="main-nav-item" href="<?php echo get_permalink( get_page_by_path( 'dir4-contact-us' ) ) ?>">
            <span class="nav-num">05</span><span class="nav-title"><?php echo($menu5); //Contact us?></span></a>
          </li>
        </ul>
      </div>
      
      
            
    </div>
  </div>
  <div class="company-nav-wrapper">
    <!--<a class="brand <?php echo $department_class; ?>" href="<?php echo get_permalink( get_page_by_path( 'dir4-home' ) ) ?>"></a> -->
    <div class="brand <?php echo $department_class; ?>"></div>
      
        <?php if ($department == 'dir4films'): ?>
         <ul class="nav main-nav company-nav" id="nav-dir4films">
          <li class="" subnav="dir4-our-service">
            <a class="main-nav-item" href="<?php echo get_permalink( get_page_by_path( 'dir4films/dir4films-featured-work' ) ) ?>" subnav="dir4-our-service">
              <span class="nav-num">00</span><span class="nav-title"><?php echo($depmenu1); //Featured Work?></span>
            </a>
          </li>
          <li class=""><a class="main-nav-item" href="<?php echo get_permalink( get_page_by_path( 'dir4films/dir4films-what-we-do' ) ) ?>">
            <span class="nav-num">03</span><?php echo($depmenu2); //What we do?></a>
          </li>
          <li class="showreel-nav">
            <a class="main-nav-item" href="<?php echo get_permalink( get_page_by_path( 'dir4films/dir4films-showreels' ) ) ?>">
                <span class="nav-num">01</span><?php echo($depmenu3); //Showreels?></a>
	            <div class="category-list-wrapper director-list-wrapper">
	              <h2 class="director-list-header"><?php echo($depmenuDirector); //Director?></h2>
	              <ul class="director-list">
	                <?php 
	                $args = array(    
	                  'posts_per_page' => -1,
	                  'post_type' => 'people',
	                   'tax_query' => array (       
	                      array (          
	                        'taxonomy' => 'departments',
	                              'field' => 'slug',
	                              'terms' => 'dir4-films'
	                          ),
	                          array (          
	                        'taxonomy' => 'position',
	                              'field' => 'slug',
	                              'terms' => 'director'
	                          )
	                    )
	                   ); 
	                   query_posts($args); 
	                   if ( have_posts() ) :         
	                     while (have_posts()): the_post();?>
	                    <li><a href="<?php the_permalink();?>" class="director-link"><?php the_title(); ?> </a></li>
	                  <?php endwhile; 
	                    endif; 
	                    wp_reset_query();
	                    //wp_reset_postdata();
	                    ?>
	              </ul>
	            </div>
          </li>
          <li class="">
          	<a class="main-nav-item" href="<?php echo get_permalink( get_page_by_path( 'dir4films/dir4films-team' ) ) ?>">
            	<span class="nav-num">04</span><?php echo($depmenu4); //Team?>
            </a>
          </li>
          <!--
<li class="">
          	<a class="main-nav-item" href="<?php echo get_post_type_archive_link( 'clients' ) ?>">
            	<span class="nav-num">04</span><?php echo($menu4); //client?>
            </a>
          </li>
-->
          <li class=""><a class="main-nav-item" href="<?php echo get_permalink( get_page_by_path( 'dir4-contact-us' ) ) ?>">
            <span class="nav-num">05</span><?php echo($depmenu5); //Contact us?></a>
          </li>
        </ul>
        <?php elseif ($department == 'dir4tv'): ?>
        <ul class="nav main-nav company-nav" id="nav-dir4tv">
          <li class="" subnav="dir4-our-service">
            <!--<a class="main-nav-item" href="<?php echo get_permalink( get_page_by_path( 'dir4tv/dir4films-featured-work' ) ) ?>" subnav="dir4-our-service">-->
            <a class="main-nav-item" href="http://www.dir4films.com/dir4tv/dir4tv-featured-work/" subnav="dir4-our-service">
              <span class="nav-num">00</span><?php echo($depmenu1); //Featured Work?>
            </a>
          </li>
          <li class=""><a class="main-nav-item" href="<?php echo get_permalink( get_page_by_path( 'dir4tv/dir4tv-what-we-do' ) ) ?>">
            <span class="nav-num">02</span><?php echo($depmenu2); //What we do?></a>
          </li>
          <li class="showreel-nav">
            <a class="main-nav-item" href="<?php echo get_permalink( get_page_by_path( 'dir4tv/dir4tv-showreels' ) ) ?>">
                <span class="nav-num">01</span><?php echo($depmenu3); //Showreels?></a>
            <div class="category-list-wrapper">
	              <h2 class="category-list-header"></h2>
	              <ul class="category-list">
	                <?php 
	                	$args = array(
	                				'child_of' => 19
	                					);
	                    $categories = get_categories($args); 
	                    foreach ($categories as $cat):?>
	                    <li><a href="<?php echo get_category_link( $cat->term_id )?>" class="category-link"><?php echo $cat->name; ?></a></li>
	                  <?php endforeach; 
	                    wp_reset_query();
	                    //wp_reset_postdata();
	                    ?>
	              </ul>
	            </div>

          </li>
          <li class=""><a class="main-nav-item" href="<?php echo get_permalink( get_page_by_path( 'dir4tv/dir4tv-team' ) ) ?>">
            <span class="nav-num">03</span><?php echo($depmenu4); //Team?></a>
          </li>
          <!--
<li class="">
          	<a class="main-nav-item" href="<?php echo get_post_type_archive_link( 'clients' ) ?>">
            	<span class="nav-num">04</span><?php echo($menu4); //client?>
            </a>
          </li>
-->
          <li class=""><a class="main-nav-item" href="<?php echo get_permalink( get_page_by_path( 'dir4-contact-us' ) ) ?>">
            <span class="nav-num">04</span><?php echo($depmenu5); //Contact us?></a>
          </li>
        </ul>
        <?php elseif ($department == '4by4'): ?>
        <ul class="nav main-nav company-nav" id="nav-4by4">
          <li class="" subnav="dir4-our-service">
            <a class="main-nav-item" href="<?php echo get_permalink( get_page_by_path( '4by4/4by4-featured-work' ) ) ?>" subnav="dir4-our-service">
              <span class="nav-num">00</span><?php echo($depmenu1); //Featured Work?>
            </a>
          </li>
          <li class=""><a class="main-nav-item" href="<?php echo get_permalink( get_page_by_path( '4by4/4by4-what-we-do' ) ) ?>">
            <span class="nav-num">02</span><?php echo($depmenu2); //What we do?></a>
          </li>
          <li class="">
            <a class="main-nav-item" href="<?php echo get_permalink( get_page_by_path( '4by4/4by4-showreels' ) ) ?>">
                <span class="nav-num">01</span><?php echo($depmenu3); //Showreels?></a>
          </li>
          <li class=""><a class="main-nav-item" href="<?php echo get_permalink( get_page_by_path( '4by4/4by4-team' ) ) ?>">
            <span class="nav-num">03</span><?php echo($depmenu4); //Team?></a>
          </li>
          <!--
<li class="">
          	<a class="main-nav-item" href="<?php echo get_post_type_archive_link( 'clients' ) ?>">
            	<span class="nav-num">04</span><?php echo($menu4); //client?>
            </a>
          </li>
-->
          <li class=""><a class="main-nav-item" href="<?php echo get_permalink( get_page_by_path( 'dir4-contact-us' ) ) ?>">
            <span class="nav-num">04</span><?php echo($depmenu5); //Contact us?></a>
          </li>
        </ul>
        <?php endif; ?>
		<!-- edit by Orange -->
	 	<div class="language-bar">
        	<ul class="language-list clearfix">
          <?php
				$lang = $_GET['lang'];
				if($lang == en){
			?>
				<li class="language-item active"><a href="?lang=en#">EN</a></li>
		        <li class="language-item"><a href="?lang=fr#">FR</a></li>
		        <li class="language-item"><a href="?lang=zh#">CN</a></li>
			<?php }else if($lang == fr){?>
				<li class="language-item"><a href="?lang=en#">EN</a></li>
		        <li class="language-item active"><a href="?lang=fr#">FR</a></li>
		        <li class="language-item"><a href="?lang=zh#">CN</a></li>
			<?php } else{?>
				<li class="language-item"><a href="?lang=en#">EN</a></li>
		        <li class="language-item"><a href="?lang=fr#">FR</a></li>
		        <li class="language-item active"><a href="?lang=zh#">CN</a></li>
			<?php }?>
        </ul>
		</div>
     	<!--end edit by orange -->
        <!--
<div class="nav-footer">
          <div class="search-box-wrapper"> 
          <label class="search-box-label">Search</label>
          <input type="text" class="search-box" placeholder="">
          </div>
          COPYRIGHT 2010-2014 DIR4 CO.,LTD.    
        </div>
-->
      </div><!-- company-nav-wrapper -->
  <div class="center-column">