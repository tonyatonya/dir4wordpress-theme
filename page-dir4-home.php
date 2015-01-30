<!-- edit by Orange-->
<style>
		.column-label,.nav-wrapper,.nav-footer,.right-column,.left-column{display: none !important;}
		.left-super-column{background: none !important;}
		.company-nav-wrapper{ display: none;}
		/* .language-bar{left: 40px !important; z-index: 9999 !important;} */
</style>
<!--end edit by Orange-->
<?php include('header.php'); ?>
<!-- edit by Orange -->
	
	<div class="slide-bg">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('BackgroundSlider') ) : ?><?php endif; ?>
	</div>
	
	
	

    <div class="content-main-panel" id="content-dir4-home">
    <style>
    	.center-column{
    		width: 98% !important;margin-left: auto !important; margin-right: auto !important;
			}
    </style>
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
      <div class="landing-bg">
      </div>
      <!-- DIR4Main landing Page -->
      <!-- <div class="tagline-wrapper"> -->
      <!-- <h1 class="tagline">Refine Direction of Visual Making</h1> -->
      <?php if (true): ?>
      <!--edit by orange animation and Feature News -->
      	<div class="area">
			<div class="bigLogo">
				<img src="<?php bloginfo('template_url'); ?>/images/dir4.svg" width="280" height="95px;">
			</div>
			<div class="enterbtn"></div>
			<div class="welcomeText">
				<?php echo($welcomeTextH); ?>
			</div>
			<div class="dep-slider sliderkit">
				<div class="logo-list">
					<div class="sliderkit-nav">
						<div class="sliderkit-nav-clip">
							<ul>
								<li class="dir4films-logo"><a href="#"></a></li>
								<li class="dir4tv-logo"><a href="#"></a></li>
								<li class="dir4by4-logo"><a href="#"></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="des-slide">
					<div class="des-slide-nav">
					<div class="sliderkit-btn sliderkit-go-btn sliderkit-go-prev nav-left"><a href="#"><span>left</span></a></div>
					<div class="sliderkit-btn sliderkit-go-btn sliderkit-go-next nav-right"><a href="#"><span>right</span></a></div>
				</div>
					<div class="slidefrm sliderkit-panels">
						<!-- <ul> -->
							<div class="sliderkit-panel"><div class="des-box">
							<div class="maintext"><?php echo $desdep1_title; //TV COMMERCIALS WITH STUNNING VISUALS ?></div>
							<div class="subtext">
								<?php
									echo($desdep1);
									
								?>
								<div class="enterText">
										<a href="http://www.dir4films.com/dir4films/dir4films-featured-work/">
											<div class="grayText"><?php echo($enterText1);?>
											<!-- <img src="<?php bloginfo('template_url'); ?>/images/play.svg" height="33" width="33"> -->
											</div> 
										</a>
								</div>
							</div>
						</div></div>
							<div class="sliderkit-panel"><div class="des-box">
							<div class="maintext"><?php echo($desdep2_title); //GAIN KNOWLEDGE WITH EDUTAINMENT PROGRAMS ?></div>
							<div class="subtext">
								<?php
									echo($desdep2);
									
								?>
								<div class="enterText">
										<a href="http://www.dir4films.com/dir4tv/dir4tv-featured-work/">
											<div class="grayText"><?php echo($enterText2);?>
											<!-- <img src="<?php bloginfo('template_url'); ?>/images/play.svg" height="33" width="33"> --></div>
											
										</a>
								</div>
							</div>
						</div></div>
							<div class="sliderkit-panel"><div class="des-box">
							<div class="maintext"><?php echo($desdep3_title);//CREATIVE VISUAL HOUSE?></div>
							<div class="subtext">
								<?php
									echo($desdep3);
									
								?>
								<div class="enterText">
										<a href="http://www.dir4films.com/4by4/4by4-featured-work/">
											<div class="grayText"><?php echo($enterText3);?>
											<!-- <img src="<?php bloginfo('template_url'); ?>/images/play.svg" height="33" width="33"> --></div>
											
										</a>
								</div>
							</div>
						</div></div>
						<!-- </ul> -->
				</div>
				</div>
			</div>
			<div class="land-news">
				<div class="news-nav">
					<div class="sliderkit-btn sliderkit-go-btn sliderkit-go-prev news-left"><a href="#"><span>Previous</span></a></div>
					<div class="sliderkit-btn sliderkit-go-btn sliderkit-go-next news-right"><a href="#"><span>Next</span></a></div>
				</div>
				<div class="news-slideframe">
					<div class="slidetrain show">	
					<?php
					
					/*
$args = array(
							'posts_per_page' => 6,
							'post_type' => 'reels',
							//'terms' => 'dir4films',
							'tax_query' => array (
								
									array(
									'taxonomy' => 'departments',
									'field' => 'slug',
					 	            'terms' => 'dir4-films'   
				 	            )

							)
							
					);
*/

						$arr_director_name = array(
				 		'post_type' => 'people',
				 		'departments' => 'dir4-films',
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
						
						query_posts($arr_director);
						if(have_posts()):
							while(have_posts()): the_post();?>
							<?php $videoMeta = get_post_meta(get_the_ID(), '_fvp_video', true);?>
							<?php if (0) :?>
							<iframe src="http://player.vimeo.com/video/<?php echo $videoMeta['id'];?>?color=fb5220&show_title=0&show_portrait=0&byline=0&autoplay=1&rel=0" width="369" height="200" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
					    	<?php else: ?>
							<div class="news-item">
									<div class="news-img">
										<?php the_post_thumbnail('thumbnail');//the_post_thumbnail('reel-thumbnail'); ?>
									</div>
									<?php endif; ?>
									<div class="hover">
									<a class="showreel-landing-overlay showreel-overlay" href="<?php echo $videoMeta['full']; ?>">
										<div class="box">
										<div class="news-title"><a href="<?php echo get_permalink($contents->ID); ?>"><?php the_title();?></a></div>
										</div>
									</a>
								</div>
								</div>
						<?php endwhile;
						endif;}
						?>					
					<?php
							$categoryid = get_cat_ID('News');
							$args = array(
					        'numberposts' => 1, //post counter
					        'category' => $categoryid
							);
							$features = get_posts( $args );
							foreach($features as $post){
								 setup_postdata($post);
							?>
								<div class="news-item">
									<div class="news-img">
										<a href="<?php echo get_permalink($contents->ID); ?>">
											<img src="<?php bloginfo('template_url'); ?>/images/newsitem.jpg" alt="newsitem" width="245" height="125" style=" width:245px; hegiht:125px;" />
											<?php //the_post_thumbnail(); ?>
										</a>
									</div>
									<!--<div class="hover">
									<a href="<?php echo get_permalink($contents->ID); ?>">
										<div class="box">
										<div class="news-title"><a href="<?php echo get_permalink($contents->ID); ?>"><?php echo get_the_title(); ?></a></div>
										<div class="more"><a href="<?php echo get_permalink($contents->ID); ?>" class="more"><span>more</span></a></div>
										</div>
									</a>
								</div>-->
								</div>
						<?php
							}
						?>
					
				</div>
					
					<div class="slidetrain hide" style="display:none;">	
					<?php $args = array(    
							'posts_per_page' => 2,
						 	'post_type' => 'reels',
						 	 'tax_query' => array ( 
						 	 		/*
array(
									'taxonomy' => 'departments',
									'field' => 'slug',
					 	            'terms' => 'dir4-tv'   
				 	                ), 
*/     
						 	 		array (          
						 	 			'taxonomy' => 'category',
						 	 			//'field' =>'slug',
						 	 			//'terms' => array('documentary')
						 	            
							 			'field' => 'id',
						 	            'terms' => 20,
						 	            
						 				
						 	       ),
						 	        
						 	     ) 
						 	 );
						query_posts($args);
						if(have_posts()):
							while(have_posts()): the_post();?>
							<?php $videoMeta = get_post_meta(get_the_ID(), '_fvp_video', true);?>
							<?php if (0) :?>
							<iframe src="http://player.vimeo.com/video/<?php echo $videoMeta['id'];?>?color=fb5220&show_title=0&show_portrait=0&byline=0&autoplay=1&rel=0" width="369" height="200" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
					    	<?php else: ?>
							<div class="news-item">
									<div class="news-img">
										<?php the_post_thumbnail('thumbnail');//the_post_thumbnail('reel-thumbnail'); ?>
									</div>
									<?php endif; ?>
									<div class="hover">
									<a class="showreel-landing-overlay showreel-overlay" href="<?php echo $videoMeta['full']; ?>">
										<div class="box">
										<div class="news-title"><a href="<?php echo get_permalink($contents->ID); ?>"><?php the_title();?></a></div>
										</div>
									</a>
								</div>
								</div>
						<?php endwhile;
						endif;
						?>
						<?php $args = array(    
							'posts_per_page' => 2,
						 	'post_type' => 'reels',
						 	 'tax_query' => array (
						 	 		/*
array(
									'taxonomy' => 'departments',
									'field' => 'slug',
					 	            'terms' => 'dir4-tv'   
				 	                ),
*/      
						 	 		array (          
						 	 			'taxonomy' => 'category',
						 	            'field' => 'id',
						 	            'terms' => 21
						 	 			//'field' =>'slug',
						 	 			//'terms' => 'edutainment'
						 	        )
						 	     ) 
						 	 );
						query_posts($args);
						if(have_posts()):
							while(have_posts()): the_post();?>
							<?php $videoMeta = get_post_meta(get_the_ID(), '_fvp_video', true);?>
							<?php if (0) :?>
							<iframe src="http://player.vimeo.com/video/<?php echo $videoMeta['id'];?>?color=fb5220&show_title=0&show_portrait=0&byline=0&autoplay=1&rel=0" width="369" height="200" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
					    	<?php else: ?>
							<div class="news-item">
									<div class="news-img">
										<?php the_post_thumbnail('thumbnail');//the_post_thumbnail('reel-thumbnail'); ?>
									</div>
									<?php endif; ?>
									<div class="hover">
									<a class="showreel-landing-overlay showreel-overlay" href="<?php echo $videoMeta['full']; ?>">
										<div class="box">
										<div class="news-title"><a href="<?php echo get_permalink($contents->ID); ?>"><?php the_title();?></a></div>
										</div>
									</a>
								</div>
								</div>
						<?php endwhile;
						endif;
						?>
						<?php $args = array(    
							'posts_per_page' => 2,
						 	'post_type' => 'reels',
						 	 'tax_query' => array (
						 	 		/*
array(
									'taxonomy' => 'departments',
									'field' => 'slug',
					 	            'terms' => 'dir4-tv'   
				 	                ), 
*/      
						 	 		array (          
						 	 		'taxonomy' => 'category',
						 	            'field' => 'id',
						 	            'terms' => 22
						 	        )						 	     ) 
						 	 );
						query_posts($args);
						if(have_posts()):
							while(have_posts()): the_post();?>
							<?php $videoMeta = get_post_meta(get_the_ID(), '_fvp_video', true);?>
							<?php if (0) :?>
							<iframe src="http://player.vimeo.com/video/<?php echo $videoMeta['id'];?>?color=fb5220&show_title=0&show_portrait=0&byline=0&autoplay=1&rel=0" width="369" height="200" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
					    	<?php else: ?>
							<div class="news-item">
									<div class="news-img">
										<?php the_post_thumbnail('thumbnail');//the_post_thumbnail('reel-thumbnail'); ?>
									</div>
									<?php endif; ?>
									<div class="hover">
									<a class="showreel-landing-overlay showreel-overlay" href="<?php echo $videoMeta['full']; ?>">
										<div class="box">
										<div class="news-title"><a href="<?php echo get_permalink($contents->ID); ?>"><?php the_title();?></a></div>
										</div>
									</a>
								</div>
								</div>
						<?php endwhile;
						endif;
						?>
					<?php
							$categoryid = get_cat_ID('News');
							$args = array(
					        'numberposts' => 1, //post counter
					        'category' => $categoryid
							);
							$features = get_posts( $args );
							foreach($features as $post){
								 setup_postdata($post);
							?>
								<div class="news-item">
									<div class="news-img">
										<a href="<?php echo get_permalink($contents->ID); ?>">
											<img src="<?php bloginfo('template_url'); ?>/images/newsitem.jpg" alt="newsitem" width="245" height="125" style=" width:245px; hegiht:125px;" />
											<?php //the_post_thumbnail(); ?>
										</a>
									</div>
									<!--<div class="hover">
									<a href="<?php echo get_permalink($contents->ID); ?>">
										<div class="box">
										<div class="news-title"><a href="<?php echo get_permalink($contents->ID); ?>"><?php echo get_the_title(); ?></a></div>
										<div class="more"><a href="<?php echo get_permalink($contents->ID); ?>" class="more"><span>more</span></a></div>
										</div>
									</a>
								</div>-->
								</div>
						<?php
							}
						?>
					
				</div>
					<div class="slidetrain hide" style="display:none;">	
					
					<?php $args = array(
							'posts_per_page' => 6,
							'post_type' => 'reels',
							'tax_query' => array(
								array(
									'taxonomy' => 'departments',
									'field' => 'slug',
									'terms' => '4by4'
								),
								array(
				 					'taxonomy' => 'slidebar',
									'field' => 'slug',
									'terms' => array('slidebar-2')
				 	            )
							)
						);
						query_posts($args);
						if(have_posts()):
							while(have_posts()): the_post();?>
							<?php $videoMeta = get_post_meta(get_the_ID(), '_fvp_video', true);?>
							<?php if (0) :?>
							<iframe src="http://player.vimeo.com/video/<?php echo $videoMeta['id'];?>?color=fb5220&show_title=0&show_portrait=0&byline=0&autoplay=1&rel=0" width="369" height="200" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
					    	<?php else: ?>
							<div class="news-item">
									<div class="news-img">
										<?php the_post_thumbnail('thumbnail');//the_post_thumbnail('reel-thumbnail'); ?>
									</div>
									<?php endif; ?>
									<div class="hover">
									<a class="showreel-landing-overlay showreel-overlay" href="<?php echo $videoMeta['full']; ?>">
										<div class="box">
										<div class="news-title"><a href="<?php echo get_permalink($contents->ID); ?>"><?php the_title();?></a></div>
										</div>
									</a>
								</div>
								</div>
						<?php endwhile;
						endif;
						?>
										
					<?php
							$categoryid = get_cat_ID('News');
							$args = array(
					        'numberposts' => 1, //post counter
					        'category' => $categoryid
							);
							$features = get_posts( $args );
							foreach($features as $post){
								 setup_postdata($post);
							?>
								<div class="news-item">
									<div class="news-img">
										<a href="<?php echo get_permalink($contents->ID); ?>">
											<img src="<?php bloginfo('template_url'); ?>/images/newsitem.jpg" alt="newsitem" width="245" height="125" style=" width:245px; hegiht:125px;" />
											<?php //the_post_thumbnail(); ?>
										</a>
									</div>
									<!--<div class="hover">
									<a href="<?php echo get_permalink($contents->ID); ?>">
										<div class="box">
										<div class="news-title"><a href="<?php echo get_permalink($contents->ID); ?>"><?php echo get_the_title(); ?></a></div>
										<div class="more"><a href="<?php echo get_permalink($contents->ID); ?>" class="more"><span>more</span></a></div>
										</div>
									</a>
								</div>-->
								</div>
						<?php
							}
						?>
					
				</div>
					
				</div>
			</div>
		</div>
		<!--end edit by orange animation and Feature News -->
      
      <!-- .DIR4Main landing Page -->
      <!-- <div class="nav-department-wrapper">
        <ul class="nav-department nav-horizontal clearfix" id="department-landingpage">
          <li><a href="<?php echo get_permalink( get_page_by_path( 'dir4films/dir4films-featured-work' ) ) ?>" class="nav-logo-dir4films"></a>
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
          <li><a href="<?php echo get_permalink( get_page_by_path( 'dir4tv/dir4tv-featured-work' ) ) ?>" class="nav-logo-dir4tv"></a>
          	<div class="popover hide">
	          	<div class="popover-arrow"></div>
	          	<div class="popover-box2 popover-box">
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
          <li><a href="<?php echo get_permalink( get_page_by_path( '4by4/4by4-featured-work' ) ) ?>" class="nav-logo-4by4"></a>
          	<div class="popover hide">
	          	<div class="popover-arrow"></div>
	          	<div class="popover-box3 popover-box">
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
      </div>--> <!-- .nav-department-wrapper -->
      <!-- </div> --><!-- .tagline-wrapper -->
      <?php else: ?>
      
      
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
<?php endif;?>
    
</div>
    

	<?php include('footer.php'); ?>
	
	<!-- home script -->
	<script type="text/javascript">
			$(".bigLogo").ready(function(){
				setInterval(function() {
				     $("div.enterbtn").trigger("click");
				}, 3000);
			})
			
		    jQuery(function(){
		    	var wWidth = $(window).width();
		    	var hWidth = $(window).height();
		    	var maxWidth= $("body").width();
				var maxHeight = $("body").height();
				var areaWidth = $(".area").width();
				$("div.area").css({
					'width ': maxWidth,
					'height': maxHeight
				});
				$("div.enterbtn").click(function(){
					$(this).parent().addClass("animate");
				});
				
				
				//align news Box
				var newsWidth = $(".land-news").width();
				$(".land-news").css({
					'left' : (areaWidth/2) - (newsWidth/2)
				});
				
				//align biglogo
				var biglogoWidth = $(".bigLogo").width();
				$(".bigLogo").css({
					'left': (areaWidth/2) - (biglogoWidth/2)
				});
				
				//align btn
				var enterbtnWidth = $(".enterbtn").width();
				$(".enterbtn").css({
					'left':(areaWidth/2)-(enterbtnWidth/2)
				});
				
				//align welcometext
				var welcomeTextWidth = $(".welcomeText").width();
				$(".welcomeText").css({
					'left':(areaWidth/2)-(welcomeTextWidth/2)
				})
				
				//align logo list
				var logolistWidth = $(".logo-list").width();
				var depSlideWidth = $(".dep-slider").width();
				$(".logo-list").css({
					'left':(depSlideWidth/2)-(logolistWidth/2)
					//'left':(depSlideWidth/2)-(logolistWidth/2)
					//'left':(maxWidth-logolistWidth)/2
				});
				
				
				//slideWidth
				$(".slidefrm ul li").css({
					'width':areaWidth
				});
				//after all animation
				/*
$(".welcomeText").bind("animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd",function(){
					$(this).remove();
				});
*/
				/*
$(".bigLogo").bind("animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd",function(){
					$(this).remove();
				});
*/
				$(".enterbtn").bind("animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd",function(){
					$(this).remove();
				});
				
				
				//show landnews
				$(".logo-list").bind("animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd",function(){
					//setTimeout(function(){$(".land-news").addClass("land-news-opa")},500);
					$(".land-news").css({'z-index' :1});
					$(".logo-list ul li").addClass("old");
					$(".slide-bg div").eq(0).addClass("current");
					
					//intitial background
					$(".slide-bg").eq(0).fadeIn(2000);
					$(".slide-bg div").eq(1).addClass("old");
					$(".slide-bg div").eq(2).addClass("old");
					
					
				});
				
				
								
				

});
		
		$(window).load(function(){
				//alert($(window).width());
				// land news slider
				var newsWidth = $(".land-news .news-item").width();
				var newsCount = $(".land-news .show .news-item").length;
				var myPos = $(".land-news .show").position();
					
				//$(".land-news .slidetrain .news-item:last").prependTo(".land-news .slidetrain");
				//$(".land-news .slidetrain .news-item:first").appendTo(".land-news .slidetrain");

				$(".slidetrain").css({
						width:(newsWidth+1)*newsCount,
						left:newsWidth*(-1)
				});

				$(".news-right a").click(function(e){
					
					$(".land-news .show").animate({'left':"-="+newsWidth},1000,function(){

						if(myPos.left == 0){
							$(".land-news .show").css({left:newsWidth*(-1)});
						}else{
							$(".land-news .show").css({left:0});
							
						}

						$(".land-news .show .news-item:first").appendTo(".land-news .show");	
	
				});
					e.preventDefault();
				})

					
				$(".news-left a").click(function(e){
					$(".land-news .show").animate({'left':"+="+newsWidth},1000,function(){
					//$(".land-news .show .news-item:last").prependTo(".land-news .show");
					if(myPos.left == 0){
						$(".land-news .show").css({left:newsWidth*(-1)});		
					}else{
						$(".land-news .show").css({left:0});		
					}
					$(".land-news .show .news-item:last").prependTo(".land-news .show");
					
				});
					
					e.preventDefault();
				})
				
				
				
				//dep slider
				$(".dep-slider").sliderkit({
					auto:0,
					tabs:1,
					circular:1,
					panelfx:"sliding",
					//panelfxfirst:"fading",
					panelfxeasing:"easeInOutExpo",
					fastchange:0,
					keyboard:1,
					panelfxafter: function(){
						var logoIndex = $(".logo-list ul").find(".sliderkit-selected").index();
						$(".slide-bg").find(".current").removeClass("current").addClass("old");
						$(".slide-bg div").eq(logoIndex).removeClass("old").addClass("current");
						$(".news-slideframe").find(".show").removeClass("show").addClass("hide").fadeOut();
						$(".news-slideframe .slidetrain").eq(logoIndex).removeClass("hide").addClass("show").fadeIn();
						$(".news-slideframe .show").css({
							width:(newsWidth+1)*newsCount,
							left:newsWidth*(-1)
						});
					}
				});
				
				//change bg by logo
				
				$(".logo-list ul li a").click(function(){
					currentIndex = $(this).parent().index();
					//change Background
					$(".slide-bg").find(".current").removeClass("current").addClass("old");
					$(".slide-bg div").eq(currentIndex).removeClass("old").addClass("current");
				});

				//landnews
				$(".bigLogo").bind("animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd",function(){
					$(".bigLogo").css({display:'none'})
				});
		});
		
			$(window).resize(function(){
				var maxWidth= $("body").width();
				var maxHeight = $("body").height();
				var areaWidth = $(".area").width();
				$("div.area").css({
					'width ': maxWidth,
					'height': maxHeight
				});
				$("div.enterbtn").click(function(){
					$(this).parent().addClass("animate");
				});
				
				
				//align news Box
				var newsWidth = $(".land-news").width();
				$(".land-news").css({
					'left' : (areaWidth/2) - (newsWidth/2)
				});
				
				//align biglogo
				var biglogoWidth = $(".bigLogo").width();
				$(".bigLogo").css({
					'left': (areaWidth/2) - (biglogoWidth/2)
				});
				
				//align btn
				var enterbtnWidth = $(".enterbtn").width();
				$(".enterbtn").css({
					'left':(areaWidth/2)-(enterbtnWidth/2)
				});
				
				//align welcometext
				var welcomeTextWidth = $(".welcomeText").width();
				$(".welcomeText").css({
					'left':(areaWidth/2)-(welcomeTextWidth/2)
				})
				
				//align logo list
				var logolistWidth = $(".logo-list").width();
				var depSlideWidth = $(".dep-slider").width();
				$(".logo-list").css({
					'left':(depSlideWidth/2)-(logolistWidth/2)
					//'left':(depSlideWidth/2)-(logolistWidth/2)
					//'left':(maxWidth-logolistWidth)/2
				});

		})

		
		/*
		window.onresize = function(event)
			{
			    document.location.reload(true);
			}
			*/
</script>
<!-- end Edit by Orange -->