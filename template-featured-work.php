<?php 
/*
Template Name: Featured Work
*/
//get_header();
?>
<?php include('header.php'); ?>

<style type="text/css" media="screen">
	.showreel-hero-row .showreel-hero-landing{
		position: relative;
	}
	.showreel-hero-row .showreel-hero-landing{
		opacity: 0;
		-webkit-transition:opacity 1.5s;
		-moz-transition:opacity 1.5s;
		transition:opacity 1.5s;
	}
	.showreel-hero-row .showreel-hero-landing img{
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

		var allImg = $(".showreel-hero-row .showreel-hero-landing img").map(function() {
		  return $(this).attr("src");
		});
		$(".showreel-hero-row .showreel-hero-landing").prepend("<div class='preload'></div>").fadeIn();
		$(".showreel-hero-row .showreel-hero-landing").css({opacity:1});
		$(".showreel-hero-landing").fadeIn().find("img").load('load', function() {
			var _this = $(this);
					_this.css("opacity", 1);
					_this.parent().find(".preload").fadeOut().remove();
			}).each(function() {
			  if(this.complete) $(this).load();
			});
	})
</script>

<div class="company-content">
		<style>
	 		/*
.showreel-hero-row,.showreel-hero-row img{
				width: 697px;
				height: auto;
				margin-left: auto;
				margin-right: auto;
			}
*/
		</style>
			
		<?php 
			 $pageId = get_the_ID();
			 switch ($pageId) {
			 	case '2' : $dept = 'dir4-films'; break;
			 	case '346' : $dept = 'dir4-tv'; break;
			 	//case '442' : $dept = '4by4'; break;
			 	case '504' : $dept = '4by4'; break;
			 	
			 }
			 ////////////////////////////////////// start edit by orange ////////////////////////////
			 if($dept == 'dir4-films'){?>
			 	<div class="sliderHolder sliderkit">
				 	<div class="sliderkit-nav">
						<div class="sliderkit-btn sliderkit-nav-btn sliderkit-nav-prev news-left nav-left"><a href="#"><span>Previous</span></a></div>
						<div class="sliderkit-btn sliderkit-nav-btn sliderkit-nav-next news-right nav-right"><a href="#"><span>Next</span></a></div>
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
						$i++;
						foreach($getReels->posts as $putReels){
								?>
									<li>
										<div class="item-box">
											<?php echo get_the_post_thumbnail($putReels->ID, 'thumbnail'); ?>
											<div class="myhover">
												<a href="/people/<?php echo $director_postname;?>">
													<div class="box">
														<div class="text">
															<?php echo $director_name; ?>
														</div>
														<!--
<div class="more">
															<a href="/people/<?php echo $director_postname; ?>" class="more">
																<span>more</span>
															</a>
														</div>
-->
													</div>
												</a>
											</div>
										</div>
									</li>

								<?php								
							//}
							
						}
			
				} 
			 ?>	
			 				</ul>
			 			</div>
				 	</div>
				 	
				 </div>
				 
			 <?php } elseif($dept =='dir4-tv'){?>
				<div class="sliderHolder sliderkit">
				 	<div class="sliderkit-nav">
						<div class="sliderkit-btn sliderkit-nav-btn sliderkit-nav-prev news-left nav-left"><a href="#"><span>Previous</span></a></div>
						<div class="sliderkit-btn sliderkit-nav-btn sliderkit-nav-next news-right nav-right"><a href="#"><span>Next</span></a></div>
						<div class="sliderkit-nav-clip sliderkit-nav-clip">
				<ul>
					<?php $args0 = array(    
							'posts_per_page' => 2,
						 	'post_type' => 'reels',
						 	'tax_query' => array(
						 		array (          
						 	 			'taxonomy' => 'category',
						 	            'field' => 'id',
						 	            'terms' => 20,
						 	            						 	            
						 	        ),
						 			/*
array(
						 	        	'taxonomy' => 'slidebar',
						 	            'field' => 'slug',
						 	            'terms' => 'tvbar',
						 	        )
*/
						 	        
				 				)
						 	 );
						query_posts($args0);
						if(have_posts()):
							while(have_posts()): the_post();?>
							<?php 
							//$d = get_post_custom(get_the_ID());
							//$director = $d['director'];
							//$director = wp_get_object_terms(get_the_ID(), 'people'); 
							?>
							<li>
			<?php $videoMeta = get_post_meta(get_the_ID(), '_fvp_video', true);?>
		    	<div class="item-box">
		    	<?php if (0) :?>
				<iframe src="http://player.vimeo.com/video/<?php echo $videoMeta['id'];?>?color=fb5220&show_title=0&show_portrait=0&byline=0&autoplay=1&rel=0" width="369" height="200" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
		    	<?php else: ?>
		    	<?php the_post_thumbnail('thumbnail');//the_post_thumbnail('reel-thumbnail'); ?>
		    	<?php endif; ?>
		    	<div class="myhover">
			    	<a class="showreel-landing-overlay showreel-overlay"  href="<?php echo $videoMeta['full']; ?>">
			    		<div class="box">
			    			<div class="text"><?php the_title();?></div>
			    			<div class="more">
								<a class="more showreel-landing-overlay showreel-overlay" href="<?php echo $videoMeta['full']; ?>">
									<!-- <img src="<?php bloginfo('template_url'); ?>/images/morebtn.svg"width="63" height="15"> -->
									<span>more</span>
								</a>
							</div>
			    		</div>
				    	
			    	</a>  	
		    	</div>
			</div>
		</li>
						<?php endwhile;
						endif;
						?>
						
						<?php $args1 = array(    
							'posts_per_page' => 2,
						 	'post_type' => 'reels',
						 	 'tax_query' => array (       
						 	 		array (          
						 	 			'taxonomy' => 'category',
						 	            'field' => 'id',
						 	            'terms' => 21,
						 	           
						 	        ),
						 			/*
array(
						 	        	'taxonomy' => 'slidebar',
						 	            'field' => 'slug',
						 	            'terms' => 'tvbar',
						 	        )
*/
						 	     ) 
						 	 );
						query_posts($args1);
						if(have_posts()):
							while(have_posts()): the_post();?>
							<?php 
							//$d = get_post_custom(get_the_ID());
							//$director = $d['director'];
							//$director = wp_get_object_terms(get_the_ID(), 'people'); 
							?>
							<li>
			<?php $videoMeta = get_post_meta(get_the_ID(), '_fvp_video', true);?>
		    	<div class="item-box">
		    	<?php if (0) :?>
				<iframe src="http://player.vimeo.com/video/<?php echo $videoMeta['id'];?>?color=fb5220&show_title=0&show_portrait=0&byline=0&autoplay=1&rel=0" width="369" height="200" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
		    	<?php else: ?>
		    	<?php the_post_thumbnail('thumbnail');//the_post_thumbnail('reel-thumbnail'); ?>
		    	<?php endif; ?>
		    	<div class="myhover">
			    	<a class="showreel-landing-overlay showreel-overlay"  href="<?php echo $videoMeta['full']; ?>">
			    		<div class="box">
			    			<div class="text"><?php the_title();?></div>
			    			<div class="more">
								<a class="more showreel-landing-overlay showreel-overlay" href="<?php echo $videoMeta['full']; ?>">
									<!-- <img src="<?php bloginfo('template_url'); ?>/images/morebtn.svg"width="63" height="15"> -->
									<span>more</span>
								</a>
							</div>
			    		</div>
				    	
			    	</a>  	
		    	</div>
			</div>
		</li>
						<?php endwhile;
						endif;
						?>
						
						<?php $args2 = array(    
							'posts_per_page' => 2,
						 	'post_type' => 'reels',
						 	
						 	 'tax_query' => array (       
						 	 		array (          
						 	 			'taxonomy' => 'category',
						 	            'field' => 'id',
						 	            'terms' => 22,
						 	            
						 	        ),
						 			/*
array(
						 	        	'taxonomy' => 'slidebar',
						 	            'field' => 'slug',
						 	            'terms' => 'tvbar',
						 	        )
*/
						 	      )					 	      
						 	 );
						query_posts($args2);
						if(have_posts()):
							while(have_posts()): the_post();?>
							<?php 
							//$d = get_post_custom(get_the_ID());
							//$director = $d['director'];
							//$director = wp_get_object_terms(get_the_ID(), 'people'); 
							?>
							<li>
			<?php $videoMeta = get_post_meta(get_the_ID(), '_fvp_video', true);?>
		    	<div class="item-box">
		    	<?php if (0) :?>
				<iframe src="http://player.vimeo.com/video/<?php echo $videoMeta['id'];?>?color=fb5220&show_title=0&show_portrait=0&byline=0&autoplay=1&rel=0" width="369" height="200" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
		    	<?php else: ?>
		    	<?php the_post_thumbnail('thumbnail');//the_post_thumbnail('reel-thumbnail'); ?>
		    	<?php endif; ?>
		    	<div class="myhover">
			    	<a class="showreel-landing-overlay showreel-overlay"  href="<?php echo $videoMeta['full']; ?>">
			    		<div class="box">
			    			<div class="text"><?php the_title();?></div>
			    			<div class="more">
								<a class="more showreel-landing-overlay showreel-overlay" href="<?php echo $videoMeta['full']; ?>">
									<!-- <img src="<?php bloginfo('template_url'); ?>/images/morebtn.svg"width="63" height="15"> -->
									<span>more</span>
								</a>
							</div>
			    		</div>
				    	
			    	</a>  	
		    	</div>
			</div>
		</li>
						<?php endwhile;
						endif;
						?>
				
			 	</ul>
			 			</div>
				 	</div>
				 </div>
			 <?php } elseif($dept=='4by4'){?>
			 	<div class="sliderHolder sliderkit">
				 	<div class="sliderkit-nav">
						<div class="sliderkit-btn sliderkit-nav-btn sliderkit-nav-prev news-left nav-left"><a href="#"><span>Previous</span></a></div>
						<div class="sliderkit-btn sliderkit-nav-btn sliderkit-nav-next news-right nav-right"><a href="#"><span>Next</span></a></div>
						<div class="sliderkit-nav-clip sliderkit-nav-clip">
				<ul>
					<?php
	$args = array(
		'posts_per_page' => 6,
		'post_type' => 'reels',
		'offset'=> 1,
		'tax_query' => array(
			array(
				'taxonomy' => 'departments',
				'field' => 'slug',
				'terms' => department,
			)/*
, array(
				'taxonomy' => 'displaying',
				'field' => 'slug',
				'terms' => array('featured')
			)
*/
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
		    	<div class="item-box">
		    	<?php if (0) :?>
				<iframe src="http://player.vimeo.com/video/<?php echo $videoMeta['id'];?>?color=fb5220&show_title=0&show_portrait=0&byline=0&autoplay=1&rel=0" width="369" height="200" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
		    	<?php else: ?>
		    	<?php the_post_thumbnail('thumbnail');//the_post_thumbnail('reel-thumbnail'); ?>
		    	<?php endif; ?>
		    	<div class="myhover">
			    	<a class="showreel-landing-overlay showreel-overlay"  href="<?php echo $videoMeta['full']; ?>">
			    		<div class="box">
			    			<div class="text"><?php the_title();?></div>
			    			<div class="more">
								<a class="more showreel-landing-overlay showreel-overlay" href="<?php echo $videoMeta['full']; ?>">
									<!-- <img src="<?php bloginfo('template_url'); ?>/images/morebtn.svg"width="63" height="15"> -->
									<span>more</span>
								</a>
							</div>
			    		</div>
				    	
			    	</a>  	
		    	</div>
			</div>
		</li>
	<?php endwhile;
	endif;
	?>
				
			 	</ul>
			 			</div>
				 	</div>
				 </div> 
			 <?php }
					////////////////////////////////////// end edit by orange ////////////////////////////
				 ?>
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

<!-- script -->
<script type="text/javascript">
		$(document).ready(function(){
				
				$(".news-left").click(function(e){
					e.preventDefault();
				})
				$(".news-right").click(function(e){
					e.preventDefault();
				})
				
				//infinity slider
				var newsWidth = $(".sliderHolder ul li").width();
				var newsCount = $(".sliderHolder ul li").length;
				var myPos = $(".sliderHolder .sliderkit-nav-clip ul").position();
					$(".sliderkit-nav-clip ul").css({
						width:(newsWidth)*newsCount,
						left:newsWidth*(-1)
					});
				$(".sliderHolder .sliderkit-nav-clip ul li:last").prependTo(".sliderHolder .sliderkit-nav-clip ul");
				
				$(".news-right a").click(function(e){
					$(".sliderHolder .sliderkit-nav-clip ul").animate({'left':"-="+newsWidth},1000,function(){
					if(myPos.left == 0){
						$(".sliderHolder .sliderkit-nav-clip ul").css({left:newsWidth*(-1)});		
					}else{
						$(".sliderHolder .sliderkit-nav-clip ul").css({left:0});		
					}
					$(".sliderHolder .sliderkit-nav-clip ul li:first").appendTo(".sliderHolder .sliderkit-nav-clip ul");
				});
					e.preventDefault();
				})
				$(".news-left a").click(function(e){
				
					$(".sliderHolder .sliderkit-nav-clip ul").animate({'left':"+="+newsWidth},1000,function(){
					$(".sliderHolder .sliderkit-nav-clip ul li:last").prependTo(".sliderHolder .sliderkit-nav-clip ul");
					if(myPos.left == 0){
						$(".sliderHolder .sliderkit-nav-clip ul").css({left:newsWidth*(-1)});		
					}else{
						$(".sliderHolder .sliderkit-nav-clip ul").css({left:0});		
					}
					
					
				});
					
					e.preventDefault();
				})
				
				
		});
	</script>