<?php get_header(); ?>

    <div class="content-main-panel" id="">
      <div class="row">
        <div class="column-left grey-background">
        	 <ul>
                  <li class="subnav-header">
                    <span class="black">CONTACT</span><br/>
                    <span class="palegold">US-</span>
                  </li>
                  <li class="subnav-item"><a href="<?php echo get_permalink( get_page_by_path( 'dir4-contact-us' ) ) ?>">< Back to Contact Info</a></li>
                  
           </ul>
        </div>
  	     <div class="column-right">
  	  	  
           <div class="content-column-right-wrapper">
            <h3 style="color:#fff;"><?php echo 'Contact For '.ucfirst(str_replace('-', ' ', $_GET['subject'])); ?></h3>
            <?php while(have_posts()): the_post(); ?>
            <?php the_content(); 
              endwhile; ?>

           
           
        </div>

      </div><!-- .row -->

    </div><!-- .content-main-panel -->


<?php get_footer(); ?>