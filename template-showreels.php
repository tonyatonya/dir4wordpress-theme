<?php 
/*
Template Name: Showreels
*/
//get_header();
include('header.php');
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
	})
</script>
<!-- end edit by orange -->
<div class="showreel-suya-list-wrapper">
	<!--
	<div id="pageScroller">
-->
	<ul class="showreel-list">
	<?php
	$args = array(
		'posts_per_page' => -1,
		'post_type' => 'reels',
		'tax_query' => array(
			array(
				'taxonomy' => 'departments',
				'field' => 'slug',
				'terms' => department
			)
		)
	);
	query_posts($args);
	if(have_posts()):
		while(have_posts()): the_post();?>
		<?php 
		//$d = get_post_custom(get_the_ID());
		//$director = $d['director'];
		$director = wp_get_object_terms(get_the_ID(), 'people'); 
		?>
		<li>
			<?php $videoMeta = get_post_meta(get_the_ID(), '_fvp_video', true);?>
			    	<div class="showreel-featured-landing">
			    	<div class="play-btn"></div>
			    	<?php if (0) :?>
					<iframe src="http://player.vimeo.com/video/<?php echo $videoMeta['id'];?>?color=fb5220&show_title=0&show_portrait=0&byline=0&autoplay=1&rel=0" width="369" height="200" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
			    	<?php else: ?>
			    		<?php the_post_thumbnail('reel-thumbnail'); ?>
			    	<?php endif; ?>
				    <a class="showreel-landing-overlay showreel-overlay"  href="<?php echo $videoMeta['full']; ?>">
					    	<h3 class="showreel-landing-title"><?php the_title();?></h3>
					    	<h3 class="showreel-landing-director"><?php echo $director[0]->name;//print_r($director); ?></h3>
				    	</a>  	
			</div>
		</li>
	<?php endwhile;
	endif;
	?>
	<li style="clear: both; height: 40px"></li>
</ul>
<div class="showreel-arrow">
	<div class="arrow up"></div>
	<div class="arrow down"></div>
</div>
	<!--
	</div>
	-->
</div>

<?php get_footer(); ?>