<?php get_header();
/*
Template Name: News all
*/
?>
<div class="row-fluid">
	<!-- edit by orange news all -->  
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/orange.css" />
	<div class="news-frame">
	<div class="left-col">
		<div class="news-logo"><img class="newslogo" src="<?php bloginfo('template_url'); ?>/images/newslogo.svg"></div>
	</div>
	<div class="right-col">
		
		<?php
			$categoryid = get_cat_ID('News');
			$args = array(
	        	'category' => $categoryid,
	        	'numberposts'=> 'no'
			);
			 $features = get_posts( $args );
			 $postcount = 0;
			 foreach($features as $post){
			 	$postcount++; 
			 	setup_postdata($post);
			 	if($postcount==1){
				?>
				<div class="news-hili">
					<div class="news-img">
						<a href="<?php echo get_permalink($contents->ID); ?>">
						<?php the_post_thumbnail(); ?>
						</a>
					</div>
					<div class="new-con">
				<div class="news-title">
					<a href="<?php echo get_permalink($contents->ID); ?>">
						<?php echo get_the_title(); ?>
					</a>
					</div>
				<div class="news-detail">					
					<?php //the_content();
						the_excerpt()
					?>
					</div>
				<!-- <div class="more"><a href="<?php echo get_permalink($contents->ID); ?>" class="more"><span>more</span></a></div> -->
			</div>
				</div>
			 	<?php } else{?>
				 	<div class="news-item">
						<div class="news-img">
						<a href="<?php echo get_permalink($contents->ID); ?>">
							<?php the_post_thumbnail(); ?>
						</a>
				</div>
						<div class="hover">
					<div class="box">
						<div class="news-title"><a href="<?php echo get_permalink($contents->ID); ?>"><?php echo get_the_title(); ?></a></div>
						<div class="more"><a href="<?php echo get_permalink($contents->ID); ?>" class="more"><span>more</span></a></div>
					</div>
				</div>
					</div>
				<?php } ?>
				
		<?php }?>
				
	</div>
</div>
</div>

<?php get_footer(); ?>