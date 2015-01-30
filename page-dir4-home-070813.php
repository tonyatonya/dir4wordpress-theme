<?php include('header.php'); ?>

    <div class="content-main-panel" id="content-dir4-home">
      
      <div class="landing-bg">
        
      </div>
      <!-- DIR4Main landing Page -->
      <h1 class="tagline">Refine Direction of Visual Making</h1>
      <?php if (true): ?>
      <!-- .DIR4Main landing Page -->
      <div class="nav-department-wrapper">
        <ul class="nav-department nav-horizontal clearfix" id="department-landingpage">
          <li><a href="#<?php get_permalink( get_page_by_path( 'dir4films/dir4films-featured-work' ) ) ?>" class="nav-logo-dir4films"></a>
          	<div class="popover hide">
	          	<div class="popover-arrow"></div>
	          	<div class="popover-box">
	          		<div class="popover-wrapper">
			          	<h2 class="popover-title">TV COMMERCIALS WITH STUNNING VISUALS</h2>
			          	<div class="popover-content">
			          		<img class="pull-right" />
				          	At DIR4 Films, we produce pieces of visuals to best fit your needs and honour your eyes. 
We provide a full production service from a storyboard to post produced images to create a high 
quality TV spots for your products or services. 
			          	</div>
	          		</div>
	          	</div>
          	</div>
          </li>
          <li><a href="#<?php get_permalink( get_page_by_path( 'dir4tv/dir4tv-featured-work' ) ) ?>" class="nav-logo-dir4tv"></a>
          	<div class="popover hide">
	          	<div class="popover-arrow"></div>
	          	<div class="popover-box">
	          		<div class="popover-wrapper">
			          	<h2 class="popover-title">GAIN KNOWLEDGE WITH EDUTAINMENT PROGRAMS</h2>
			          	<div class="popover-content">
			          		<img class="pull-right" />
				          	At DIR4 TV, we produce programs, series or documentaries. Meaningful images as well as beauty of knowledge is our main concern. We provide a full production service to create high quality visuals.
			          	</div>
	          		</div>
	          	</div>
          	</div>
          </li>
          <li><a href="#<?php get_permalink( get_page_by_path( '4by4/4by4-featured-work' ) ) ?>" class="nav-logo-4by4"></a>
          	<div class="popover hide">
	          	<div class="popover-arrow"></div>
	          	<div class="popover-box">
	          		<div class="popover-wrapper">
			          	<h2 class="popover-title">CREATIVE VISUAL HOUSE</h2>
			          	<div class="popover-content">
			          		<img class="pull-right" />
				          	At 4by4, we produce web spots 
or web films. Restricted equipment allows us to make simple but creative visuals at a reasonable cost. We provide a basic production service to create fine quality visuals for web media.
			          	</div>
	          		</div>
	          	</div>
          	</div>
          </li>
        </ul>
      <?php endif; ?>
      
      
      <div class="landing-page-wrapper">
      <?php $departments = array('dir4-films',  'dir4-tv', '4by4'); ?>
      <?php 
      	$desc = array(); 
      	$desc['dir4-films'] = 'At DIR4 Films, we produce pieces of visuals to best fit your needs and honour your eyes. 
We provide a full production service from a storyboard to post produced images to create a high 
quality TV spots for your products or services. ';
      	$desc['dir4-tv'] = 'At DIR4 TV, we produce programs, series or documentaries. Meaningful images as well as beauty of knowledge is our main concern. We provide a full production service to create high quality visuals.';
      	$desc['4by4'] = 'At 4by4, we produce web spots 
or web films. Restricted equipment allows us to make simple but creative visuals at a reasonable cost. We provide a basic production service to create fine quality visuals for web media.';

      ?>
      <?php foreach ($departments as $dept): ?>
      <div class="landing-wrapper landing-wrapper-<?php echo $dept; ?>">
      
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
						    <a href="<?php the_permalink(); ?>" class="reel-info">INFO</a>
		
				    	</div>
					<?php endwhile; 
					endif;
				wp_reset_query();
				wp_reset_postdata(); ?>
      </div><!-- .showreel-hero-row -->
      
      
      <h1 class="department-title"><?php echo str_replace('-', ' ', $dept); ?></h1>
      <p class="landing-department-desc"><?php echo $desc[$dept]; ?></p>
      
	  <div class="showreel-featured-row clearfix">
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
								'terms' => array('featured')
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
      <div class="showreel-landing-footer clearfix">
      <?php $key = str_replace('-', '', $dept); ?>
      	<a class="pull-right btn-seemore" href="<?php echo get_permalink( get_page_by_path( $key.'/'.$key.'-showreels' ) );?>">See more</a>
      </div>
			
      </div><!--.landing-wrapper landing-wrapper--->	
      <?php
      		wp_reset_query();
      		wp_reset_postdata(); 
	     	 endforeach; ?>
      </div><!-- .landing-page-wrapper -->
    
</div>
    

	<?php include('footer.php'); ?>