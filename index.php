<?php get_header(); ?>
<div class="row-fluid">

<!--
  <div class="span4">
    <div class="company-column">
      <ul class="service-columns">
        <li class="service-item">
          <img src="<?php bloginfo('template_url'); ?>/content/01.jpg" />
        </li>
        <li class="service-item">
          <img src="<?php bloginfo('template_url'); ?>/content/02.jpg" />
        </li>
        <li class="service-item">
          <img src="<?php bloginfo('template_url'); ?>/content/03.jpg" />
        </li>
        <li class="service-item">
          <img src="<?php bloginfo('template_url'); ?>/content/04.jpg" />
        </li>
      </ul>
      <div class="company-name">
        <a class="link-logo dir4films" href="#"></a>
      </div>
      <div class="service-content">
        <h2>DIR4FILMS SERVICE</h2>
        <p>Pole dance was born in the 20s inspired by the circus arts.The discipline has since developed into distinct genres and gained popularity as a sport ten years ago. Combining dance, gymnastics and acrobatics, it is distinguished by its ultra feminine side and quick physical results it provides. Every muscle in your body is engaged to fight gravity to stay suspended or to climb the pole.Classes are designed for women of all age, sizes and level. Ultra feminine, efficient and fun!</p>
      </div>
    </div>

  </div>
  <div class="span4">
    <div class="company-column">
      <ul class="service-columns">
        <li class="service-item">
          <img src="<?php bloginfo('template_url'); ?>/content/05.jpg" />
        </li>
        <li class="service-item">
          <img src="<?php bloginfo('template_url'); ?>/content/06.jpg" />
        </li>
        <li class="service-item">
          <img src="<?php bloginfo('template_url'); ?>/content/07.jpg" />
        </li>
        <li class="service-item">
          <img src="<?php bloginfo('template_url'); ?>/content/08.jpg" />
        </li>
      </ul>
      <div class="company-name">
        <a class="link-logo dir4tv" href="#"></a>
      </div>
      <div class="service-content">
        <h2>DIR4TV SERVICE</h2>
        <p>Mark Rosolini’s Satori Dance Company develops exceptional entertainment through the creation of all forms of professional dance. The company performs a variety of commercial and theatrical forms of entertainment some of them include musical theatre, singing performances, Brazilian/Latin, acrobatics, funk, hip hop, club shows, freestyling, flamboyant and theatrical partnering and other specialized performances.</p>
      </div>
    </div>
  </div>
  <div class="span4">
    <div class="company-column">
      <ul class="service-columns">
        <li class="service-item">
          <img src="<?php bloginfo('template_url'); ?>/content/09.jpg" />
        </li>
        <li class="service-item">
          <img src="<?php bloginfo('template_url'); ?>/content/10.jpg" />
        </li>
        <li class="service-item">
          <img src="<?php bloginfo('template_url'); ?>/content/11.jpg" />
        </li>
        <li class="service-item">
          <img src="<?php bloginfo('template_url'); ?>/content/12.jpg" />
        </li>
      </ul>
      <div class="company-name">
        <a class="link-logo by4" href="#"></a>
      </div>
      <div class="service-content">
        <h2>4BY4 SERVICE</h2>
        <p>With Mark’s extensive experience directing, choreographing and professional dance background he as founded SE Asia’s only production company that specializes in events, commercial entertainment, tailor made acts, singing, dance and specialised performances to suit your needs.

Whether it be a major production, corporate event, private party, product launch, conference, exhibition, gala ball or festival, The Satori Dance Company can provide the creative process from directing, stage and lighting, choreographing, state of the art costumes and outstanding performers to suit your every need. </p>
      </div>
    </div>
  </div>
  -->
<!-- edit by orange show news -->
<style>
	/* .company-nav-wrapper{ display: none;} */
</style>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/orange.css" />
	<div class="content-main-panel span4" id="content-dir4-news">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
			// get Video link
			$videoMeta = get_post_meta(get_the_ID(), '_fvp_video', true);
		?>
		<div class="news-frame">
		<div class="left-col">
			<div class="news-logo"><img class="newslogo" src="<?php bloginfo('template_url'); ?>/images/newslogo.svg"></div>
			<!-- <div class="news-back"> -->
				<!-- <a href="<?php echo get_permalink( get_page_by_path( 'news-all' ) ) ?>" class="backbtn"><span>BACK</span></a> -->
				<!-- <a href="http://www.dir4films.com" class="backbtn"><span>BACK</span></a> -->
			<!-- </div> -->
		</div>
		<div class="right-col">
			<?php if ($videoMeta){?>
				<?php if ($videoMeta['prov']=='vimeo' ) {?>
			    	<iframe src="http://player.vimeo.com/video/<?php echo $videoMeta['id'];?>?color=fb5220&show_title=0&show_portrait=0&byline=0" width="720" height="390" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
			    	<?php } else if ($videoMeta['prov']=='youtube') {?>
			    		<iframe width="720" height="390" src="//www.youtube.com/embed/<?php echo $videoMeta['id'];?>" frameborder="0" allowfullscreen></iframe>
						<?php } ?>
			    	<?php } else{ ?>
					<div class="mainimg"><?php the_post_thumbnail('large'); ?></div>
					<?php }?>
					<div class="news-title"><?php the_title(); ?></div>
					<div class="news-detail">
						<p>
							<?php the_content(); ?>
						</p>
					</div>
				<div style="width:100%; clear:both;display:block; margin-top:50px; margin-bottom:20px; border-top:solid 1px white;"></div>
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
			 	
				 ?>	
				 <div class="news-item">
						<div class="news-img">
						<a href="<?php echo get_permalink($contents->ID); ?>">
							<?php the_post_thumbnail(); ?>
						</a>
				</div>
						<div class="hover">
							<a href="<?php echo get_permalink($contents->ID); ?>">
								<div class="box">
						<div class="news-title"><a href="<?php echo get_permalink($contents->ID); ?>"><?php echo get_the_title(); ?></a></div>
						<div class="more"><a href="<?php echo get_permalink($contents->ID); ?>" class="more"><span>more</span></a></div>
					</div>
							</a>
						</div>
					</div>
				
				
		<?php }?>
		</div>
</div>
	<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>