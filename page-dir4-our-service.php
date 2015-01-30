<?php get_header(); ?>
 <div class="content-main-panel" id="content-our-services">
      <div class="row">
        <div class="column-left page-summary">
        	<h1 class="page-header">Our services</h1>
        	
        	<div class="nav-department-wrapper">
	        <ul class="nav-department nav-vertical clearfix" id="subnav-our-service">
	          <li><a href="<?php echo get_permalink( get_page_by_path( 'dir4films/dir4films-featured-work' ) ) ?>" key="#service-dir4films" class="nav-logo-dir4films current"></a></li>
	          <li><a href="<?php echo get_permalink( get_page_by_path( 'dir4tv/dir4tv-featured-work' ) ) ?>" key="#service-dir4tv" class="nav-logo-dir4tv"></a></li>
	          <li><a href="<?php echo get_permalink( get_page_by_path( '4by4/4by4-featured-work' ) ) ?>" key="#service-4by4" class="nav-logo-4by4"></a></li>
	        </ul>
	      </div>
        	
        </div>
    	<div class="column-right page-content page-content-service">
    		<div class="slide" id="service-dir4films">
                <div class="about-wrapper">
	    		<h2 class="service-header">TV Commercials<br> with REFINED VISUALS</h2>
	    		<p class="service-description">
	    		At DIR4 Films. we produce pieces of visuals to best fit your needs and honour your eyes with artistic angle. We provide a full production service from a story board to post produced images which would create a high quality TV spots for your products and services. Our team is ready to support any of your production requirements of shooting in Thailand with high standard equipment, facilities and services.
                </p>
                </div>
    		</div>
    		<div class="slide" id="service-dir4tv">
                <div class="about-wrapper">
	    		<h2 class="service-header">Gain knowledge <br>with edutainment<br> programs</h2>
	    		<p class="service-description">At DIR4 TV, we produce TV programs, series, and documentaries. Meaningful images as well as beauty of knowledge are our main concerns. Our full production service is to create high quality visuals. We are the new generation content providers and the artistic visual makers.</p>
    		      </div>
            </div>
    		<div class="slide" id="service-4by4">
                <div class="about-wrapper">
	    		<h2 class="service-header">Creative <br>Visual house</h2>
	    		<p class="service-description">At 4by4, we produce and create TV commercials, Viral, Music Videos and innovative visual medias. We make things simple but creative by professional compact team.</p>
    		  </div>
            </div>
    		
    	</div>
      </div>
 </div>
<?php get_footer();?>