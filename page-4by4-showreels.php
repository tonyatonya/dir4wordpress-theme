<?php include('header.php'); ?>

    <div class="content-main-panel" id="content-archive-reels">
            
      <div class="landing-page-wrapper">
      <?php $departments = array('4by4'); ?>
     
      <?php foreach ($departments as $dept): ?>
      <div class="landing-wrapper landing-wrapper-<?php echo $dept; ?>">
      
      <h1 class="department-title"><?php echo str_replace('-', ' ', $dept); ?> SHOWREELS</h1>      
       
	  <div class="showreel-featured-row clearfix">
				<?php  					
					$args = array(    
				 	'post_type' => 'reels',
				 	 'tax_query' => array (       
				 	 		array (          
				 	 			'taxonomy' => 'departments',
				 	            'field' => 'slug',
				 	            'terms' => $dept
				 	        )
				 	     ) 
				 	 ); 
				 	 query_posts($args); if ( have_posts() ) :
						   
				 while (have_posts()): the_post();?>
			    <?php $videoMeta = get_post_meta(get_the_ID(), '_fvp_video', true);?>
			    	<div class="showreel-featured-landing">
			    	<?php if (1) :?>
			    	<iframe src="http://player.vimeo.com/video/<?php echo $videoMeta['id'];?>?color=fb5220&show_title=0&show_portrait=0&byline=0" width="369" height="200" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
			    	<?php else: ?>
			    		<?php the_post_thumbnail('large'); ?>
			    	<?php endif; ?>
				    	<div class="showreel-landing-overlay">
					    	<h3 class="showreel-landing-title"><?php the_title(); ?></h3>
				    	</div>
				    	<a href="<?php the_permalink(); ?>" class="reel-info">INFO</a>
			    	</div>
				<?php endwhile;endif; ?>
	
      </div><!-- .showreel-featured-row -->
     		
      </div><!--.landing-wrapper landing-wrapper--->	
      <?php
      		wp_reset_query();
      		wp_reset_postdata(); 
	     	 endforeach; ?>
      </div><!-- .landing-page-wrapper -->

    </div>
    

	<?php include('footer.php'); ?>