<?php
/* page-featured-work */
$dept = 'dir4-films';
get_header(); ?>
<div class="showreel-hero-row">
  <?php 
		 $args = array(    
		 	'post_type' => 'reels',
		 	 'tax_query' => array (       
		 	 		array (          
		 	 			'taxonomy' => 'departments',
		 	            'field' => 'slug',
		 	            'terms' => $dept
		 	        ),
		 	        array(
						'taxonomy' => 'displaying',
						'field' => 'slug',
						'terms' => array('hero')
					)
		 	     ) 
		 	 ); 
		 	 query_posts($args); 
		 	 if ( have_posts() ) : 				 
			 	 while (have_posts()): the_post();?>
			    <?php $videoMeta = get_post_meta(get_the_ID(), '_fvp_video', true);?>
		    	<div class="showreel-hero-landing">
		    	<?php if (1) :?>
			    	<iframe src="http://player.vimeo.com/video/<?php echo $videoMeta['id'];?>?color=fb5220&show_title=0&show_portrait=0&byline=0" width="1108" height="600" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
			    	<?php else: ?>
			    		<?php the_post_thumbnail('large'); ?>
			    	<?php endif; ?>
			    	<div class="showreel-landing-overlay">
					 	<h3 class="showreel-landing-title"><?php the_title(); ?></h3>
				    </div>
				    <a href="<?php the_permalink(); ?>" class="reel-info hide">INFO</a>

		    	</div>
			<?php endwhile; 
			endif;
		wp_reset_query();
		wp_reset_postdata(); ?>
</div><!-- .showreel-hero-row -->
<?php get_footer(); ?>