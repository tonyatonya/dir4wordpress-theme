<?php 
/*
Template Name: Featured Work
*/
//get_header();
?>
<?php include('header.php'); ?>
<div class="company-content">
	
		<?php 
			 $pageId = get_the_ID();
			 switch ($pageId) {
			 	case '2' : $dept = 'dir4-films'; break;
			 	case '346' : $dept = 'dir4-tv'; break;
			 	case '442' : $dept = '4by4'; break;
			 }
			 if($dept == 'dir4-films'){?>
			 	<style>
			 		.showreel-hero-row,.showreel-hero-row img{
						width: 697px;
						height: auto;
						margin-left: auto;
						margin-right: auto;
					}
			 	</style>
			 	<script type="text/javascript">
		$(window).load(function(){
		
				$(".sliderHolder").sliderkit({
							auto:false,
							circular:false,
							shownavitems:4,
							scroll:1,
							//navcontinuous: true,
							//scrollspeed: 700,
							//scrolleasing: "linear"
						});
				$(".news-left").click(function(e){
					e.preventDefault();
				})
				$(".news-right").click(function(e){
					e.preventDefault();
				})
		});
	</script>
			 	<div class="sliderHolder sliderkit">
		<div class="sliderkit-nav">
		<div class="sliderkit-btn sliderkit-nav-btn sliderkit-nav-prev nav-left"><a href="#"><span>Previous</span></a></div>
		<div class="sliderkit-btn sliderkit-nav-btn sliderkit-nav-next nav-right"><a href="#"><span>Next</span></a></div>
		<div class="sliderkit-nav-clip">
		<ul>
			 <?php
				$arr_director_name = array(
				 		'post_type' => 'people',
				 		'departments' => $dept,
				 'tax_query' => array (
					array(
				 		'taxonomy' => 'position',
				 	    'field' => 'slug',
				 	    'terms' => 'Director'
				 	)
				 )				
				);
				
				$getDirector = new WP_Query($arr_director_name);
				foreach ($getDirector->posts as $putDirector){
						
						$director_id = $putDirector->ID;
						$director_name = $putDirector->post_title;
						$director_postname = $putDirector->post_name;
						$arr_director = array(
							'posts_per_page' => 1,
						 	'post_type' => 'reels',
						 	 'tax_query' => array (       
						 	        array(
						 	        	'taxonomy' => 'people',
						 	        	'field' => 'slug',
						 	        	'terms' => $director_id
						 	        )
						 	     ) 
						 	 );
						$getReels = new WP_Query($arr_director);
						
						
						foreach($getReels->posts as $putReels){
							$getMyContent = new WP_Query('post_parent='.$putReels->ID.'&post_type=attachment&post_status=inherit');
							//$getDirector_name = get_posts($director_id);
							foreach($getMyContent->posts as $walk){
								$walk->posts;
								
								?>
									<li>
										<a href="/people/<?php echo $director_postname; ?>">
											<div class="item-box">
											<img src="<?php echo $walk->guid; ?>">
											<div class="myhover">
												<div class="box">
													<div class="text"><?php echo $director_name; ?></div>
												</div>
											</div>
											</div>
										</a>
									</li>
								<?php								
							}
							
						}
			
				}
				
				 
			 ?>
			 			</ul>
			 		</div>
				 	</div>
				 </div>
				 <?php } ?>
			 <div class="showreel-hero-row">
			 <?php		 	 	
			 	$args = array(    
			 	'post_type' => 'reels',
			 	 'tax_query' => array (       
			 	 		array (          
			 	 			'taxonomy' => 'departments',
			 	            'field' => 'slug',
			 	            'terms' => department
			 	        ),
			 	        array(
							'taxonomy' => 'displaying',
							'field' => 'slug',
							'terms' => array('featured')
						)
			 	     ) 
			 	 ); 
			 	 query_posts($args); 
			 	 if ( have_posts() ) : 				 
				 	 while (have_posts()): the_post();?>
				    <?php $videoMeta = get_post_meta(get_the_ID(), '_fvp_video', true);?>
			    	<div class="showreel-hero-landing">
			    		<?php if (0) :?>
				    	<iframe src="http://player.vimeo.com/video/<?php echo $videoMeta['id'];?>?color=fb5220&show_title=0&show_portrait=0&byline=0" width="1108" height="600" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
				    	<?php else: ?>
				    		<?php the_post_thumbnail('large'); ?>
				    	<?php endif; ?>
				    	<?php if (1): ?>
				    	<div class="showreel-landing-overlay featured-work-overlay" vimeo="<?php echo $videoMeta['id'];?>">
						 	<h3 class="showreel-landing-title"><?php the_title(); ?></h3>
					    </div>
					    <?php endif; ?>
			    	</div>
				<?php endwhile; 
				endif;
			wp_reset_query();
			wp_reset_postdata(); ?>
	</div><!-- .showreel-hero-row -->
</div>
<?php get_footer(); ?>