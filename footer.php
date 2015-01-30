</div>
<!-- SEO FIX -->
<div class="seo-text">
	<ul>
		<li><a href="<?php echo get_permalink( get_page_by_path( 'dir4films/dir4films-featured-work' ) )?>">PRODUCTION HOUSE THAILAND</a></li>
		<li><a href="<?php echo get_permalink( get_page_by_path( 'dir4films/dir4films-featured-work' ) )?>">THAILAND PRODUCTION HOUSE</a></li>
		<li><a href="<?php echo get_permalink( get_page_by_path( 'dir4tv/dir4tv-featured-work' ) ) ?>">THAILAND TV PROGRAM</a></li>
		<li><a href="<?php echo get_permalink( get_page_by_path( '4by4/4by4-featured-work' ) ) ?>">SHOOTING IN THAILAND</a></li>
	</ul>
</div>

<style>
	.seo-text {
		position: absolute;
		right:60px;
		bottom: 40px;
	}
	.seo-text ul li{
		list-style: none;
		float: right;
	}
	.seo-text ul li:after{
		content: " | ";
		font-size: 10px;
		font-weight: 100;
		padding-left: 3px;
		padding-right: 3px;
		opacity: 0.5;
		
	}
	.seo-text ul li:first-child:after{
		content:"";
	}
	.seo-text ul li a{
		color: white;
		text-decoration: none;
		font-size: 10px;
		opacity: 0.5;
		-moz-transition: all 0.1s ease-in;
		-webkit-transition: all 0.1s ease-in;
		-o-transition: all 0.1s ease-in;
		transition: all 0.1s ease-in;
	}
	.seo-text ul li a:hover{
		opacity: 1;
		-moz-transition: all 0.1s ease-in;
		-webkit-transition: all 0.1s ease-in;
		-o-transition: all 0.1s ease-in;
		transition: all 0.1s ease-in;
	}
</style>
<!-- end SEO FIX -->

  <div class="right-column">
    <ul class="nav-department nav-vertical clearfix">
          <li>
          	<a href="<?php echo get_permalink( get_page_by_path( 'dir4films/dir4films-featured-work' ) ) //dir4films/dir4films-featured-work ?>" class="circle-logo nav-logo-dir4films <?php echo ((department == 'dir4-films') ? 'current' : '')?>"></a>
          </li>
           <li>
          	<a href="<?php echo get_permalink( get_page_by_path( 'dir4tv/dir4tv-featured-work' ) ) ?>" class="circle-logo nav-logo-dir4tv <?php echo ((department == 'dir4-tv') ? 'current' : '')?>"></a>
          </li>
           <li>
          	<a href="<?php echo get_permalink( get_page_by_path( '4by4/4by4-featured-work' ) ) ?>" class="circle-logo nav-logo-4by4 <?php echo ((department == '4by4') ? 'current' : '')?>"></a>
          </li>
  </div>
  
  <?php if (0): ?>
  <div class="showreel-column">
    <a href="#" class="column-label ir" style="display:none;">SHOWREELS</a>
    <a href="#" class="icon-camera"></a>
    <div class="showreel-row showreel-dir4films">
    <?php 
    		wp_reset_postdata();
    		$args = array(
		      'post_type'       => 'reels',
		      'departments'		=> 'dir4-films',
		      'post_limits'	 	=> 2
		     // 'tag' => 'featured',
		    );
		    $featured_films_reels = new WP_Query($args); ?>

      <div class="showreel-row-header"></div>
      <ul class="showreel-featured-list clearfix">
        <?php $count = 0; while ($featured_films_reels->have_posts() && $count < 2): $featured_films_reels->the_post();?>
        <li class="showreel-item">
          <a class="showreel-item-header" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail( array(110, 62) ); $count++; ?>
          </a>
        </li>
        <?php endwhile; ?>
      </ul>
      <a href="<?php echo get_permalink( get_page_by_path( 'dir4-showreels' ) ) ?>" class="link-text link-small link-more">More <i class="icon-right-arrow icon-small"></i></a>
    </div>

    <div class="showreel-row showreel-dir4tv">
    <?php 
    		wp_reset_postdata();
    		$args = array(
		      'post_type'       => 'reels',
		      'departments'		=> 'dir4-tv',
		      'post_limits'	 	=> 2
		     // 'tag' => 'featured',
		    );
		    $featured_tv_reels = new WP_Query($args); ?>
      <div class="showreel-row-header"></div>
      <ul class="showreel-featured-list clearfix">
        <?php $count = 0; while ($featured_tv_reels->have_posts() && $count < 2): $featured_tv_reels->the_post();?>
        <li class="showreel-item">
          <a class="showreel-item-header" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail( array(110, 62) ); $count++; ?>
          </a>
        </li>
        <?php endwhile; ?>
      </ul>
      <a href="<?php echo get_permalink( get_page_by_path( 'dir4-showreels' ) ) ?>" class="link-text link-small link-more">More <i class="icon-right-arrow icon-small"></i></a>
    </div>

    <div class="showreel-row showreel-4by4">
     <?php 
    		wp_reset_postdata();
    		$args = array(
		      'post_type'       => 'reels',
		      'departments'		=> '4by4',
		      'post_limits'	 	=> 2
		     // 'tag' => 'featured',
		    );
		    $featured_4by4_reels = new WP_Query($args); ?>
      <div class="showreel-row-header"></div>
      <ul class="showreel-featured-list clearfix">
        <?php $count = 0; while ($featured_4by4_reels->have_posts() && $count < 2): $featured_4by4_reels->the_post();?>
        <li class="showreel-item">
          <a class="showreel-item-header" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail( array(110, 62) ); $count++; ?>
          </a>
        </li>
        <?php endwhile; ?>      
       </ul>
      <a href="<?php echo get_permalink( get_page_by_path( 'dir4-showreels' ) ) ?>" class="link-text link-small link-more">More <i class="icon-right-arrow icon-small"></i></a>
    </div>

    <div class="showreel-row clearfix">
      <a href="<?php echo get_permalink( get_page_by_path( 'dir4-showreels' ) ) ?>" class="link-text link-big link-see-all-showreels">See All <i class="icon-right-arrow"></i></a>
    </div>
  </div>
  <?php endif; ?>
  


</div>
</div>
  <?php wp_footer(); ?>
   <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script> -->
        <script>window.jQuery || document.write('<script src="<?php bloginfo('template_url'); ?>/js/vendor/jquery-1.8.0.min.js"><\/script>')</script>
        <script src="<?php bloginfo('template_url'); ?>/js/plugins.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.fancybox-1.3.4.pack.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/orange/replacetext.js"></script><!-- add by Orange -->
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            /*
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
            */
        </script>
</body>
</html>