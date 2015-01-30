<?php 
	get_header();
?>

<style type="text/css" media="screen">
	.showreel-list li{
		position: relative;
	}
	.showreel-list li .showreel-featured-landing{
		opacity: 0;
		-webkit-transition:opacity 1.5s;
		-moz-transition:opacity 1.5s;
		transition:opacity 1.5s;
	}
	.showreel-list li img{
		opacity: 0;
		-webkit-transition:opacity 1.5s;
		-moz-transition:opacity 1.5s;
		transition:opacity 1.5s;
	}
	div.preload{
		width: 100%;
		height: 100%;
		position: absolute;
		left: 0;
		top: 0;
		z-index: 10;
		background: url(<?php echo bloginfo('template_url'); ?>/images/preload.gif) no-repeat center center;
		background-color: black;
	}
</style>



<div class="showreel-suya-list-wrapper">
	<div class="people-header">
		<h1 class="people-title">
			<?php the_title(); ?>
			<span class="director-arrow"></span>
		</h1>
<?PHP
$file= explode("/",$_GET['people']); 
?>
		<a href="http://www.dir4films.com/pdf/files/DIRECTOR/<?PHP echo $file[0];?>.pdf"  target="_blank"  class="btn-bio-download btn-action">Director Bio Download<span class="document"></span></a>

	</div>


<!-- query img edit by orange -->
<?php
	
	$slug = $_GET['people'];
	$directorName = substr($slug,0,-1);
	global $wpdb;
	$my_id = $wpdb->get_var( "SELECT ID FROM $wpdb->posts WHERE post_title LIKE '%".$directorName."%' AND post_type LIKE  'directorimg'" ); // getpost ID
	if(!empty($my_id) ){
	$imgUrl = wp_get_attachment_image_src(get_post_thumbnail_id($my_id),'thumbnail');
	//$imgUrl[0];
?>
	<script type="text/javascript">
		$(window).load(function(){
			var mainList = $(".showreel-list li");
			var getH = $(".showreel-list li:first-child").height();
			var getW = $(".showreel-list li:first-child").width();
			mainList.eq(0).after('<li class="directorImg"><div class="showreel-featured-landing" style="padding:0;"><?php  echo get_the_post_thumbnail($my_id); ?></div></li>');
			
			if(getH >= 300){
				$(".directorImg").find("img").css({
				'width': 100+"% !important",
				//'height': 'auto',
				'min-height': getH
				})
				
				
			}else{
				$(".directorImg").find("img").css({
				'width': 100+"% !important",
				'height': 'auto',
				})
				
			}
			
			$(".showreel-list li.directorImg").find("div.showreel-featured-landing").css({
					'height': getH,
					'min-height':300,
				})
			
		})
		
		$(window).resize(function(){
			var getH = $(".showreel-list li:first-child").height();
			if(getH<300){
				$(".directorImg").find("img").css({
				'width': 100+"% !important",
				'height': 'auto !important',
				})
			}else{
				$(".directorImg").find("img").css({
				'width': 100+"% !important",
				'min-height': getH,
				})
			}
				
			
		})
	</script>
	<style>
		.directorImg{overflow: hidden;}
		
	</style>
<?php
	}
?>
<!-- end query img edit by orange -->




<!-- edit by orange -->
<script type="text/javascript">
	$(window).load(function(){
		
		var allImg = $(".showreel-list img").map(function() {
		  return $(this).attr("src");
		});
		for(i=0;i<allImg.length;i++){
			$(".showreel-list li").eq(i).prepend("<div class='preload'></div>").fadeIn();
			$(".showreel-list li").eq(i).find(".showreel-featured-landing").css({opacity:1});
			$(".showreel-list li").eq(i).fadeIn().find("img").load('load', function() {
			var _this = $(this);
				//setTimeout(function(){
					_this.css("opacity", 1);
					_this.parent().parent().find(".preload").fadeOut().remove();
				//}, 200);
			}).each(function() {
			  if(this.complete) $(this).load();
			  
			});
		}
		$(".showreel-list li").eq(1).find(".preload").fadeOut().remove();
	})
</script>
<!-- end edit by orange -->




	<ul class="showreel-list">
		<?php 
		$args = array(    
				 	'posts_per_page' => -1,
				 	'post_type' => 'reels',
				 	 'tax_query' => array (       
				 	 		array (          
				 	 			'taxonomy' => 'departments',
				 	            'field' => 'slug',
				 	            'terms' => 'dir4-films'
				 	        ), 
				 	        array(
				 	        	'taxonomy' => 'people',
				 	        	'field' => 'slug',
				 	        	'terms' => $post->post_name
				 	        )
				 	     ) 
				 	 ); 

			query_posts($args);
		 	if ( have_posts() ) : 				 
			 	 while (have_posts()): the_post();?>
				<li>
					<?php $videoMeta = get_post_meta(get_the_ID(), '_fvp_video', true);?>
			    	<div class="showreel-featured-landing">
			    		<div class="play-btn"></div>
			    	<?php if (0) :?>
			    	<iframe src="http://player.vimeo.com/video/<?php echo $videoMeta['id'];?>?color=fb5220&show_title=0&show_portrait=0&byline=0" width="369" height="200" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
			    	<?php else: ?>
			    		<?php the_post_thumbnail('reel-thumbnail'); ?>
			    	<?php endif; ?>
				    	<a class="showreel-landing-overlay showreel-overlay"  href="<?php echo $videoMeta['full']; ?>">
					    	<h3 class="showreel-landing-title"><?php the_title(); ?></h3>
				    	</a>
				    	
			</div>
			    </li>
			<?php endwhile; 
			  endif; 
			  ?>
	</ul>
	<div class="showreel-arrow">
		<div class="arrow up"></div>
		<div class="arrow down"></div>
	</div>
</div>


<?php get_footer(); ?>