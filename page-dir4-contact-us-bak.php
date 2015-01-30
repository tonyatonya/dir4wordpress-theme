<?php 
$slug = 'dir4-contact-us';

get_header(); ?>

    <div class="content-main-panel" id="dir4-contact-us">
      <div class="row">
        <div class="column-left grey-background">
        	 <ul>
                  <li class="subnav-header">
                    <span class="black">CONTACT</span><br/>
                    <span class="palegold">US</span>
                  </li>
                  <li class="subnav-item"><a href="<?php echo add_query_arg('subject', 'Showreel', get_permalink( get_page_by_path( 'dir4-contact-form' ))); ?>">For Showreel</a></li>
                  <li class="subnav-item"><a href="<?php echo add_query_arg('subject', 'Job-Application', get_permalink( get_page_by_path( 'dir4-contact-form' ))) ?>">For Job Application</a></li>
                  <li class="subnav-item"><a href="<?php echo add_query_arg('subject', 'Director-Availability', get_permalink( get_page_by_path( 'dir4-contact-form' ))) ?>">For Director Availability</a></li>
                  <li class="subnav-item"><a href="<?php echo add_query_arg('subject', 'Public-Relation', get_permalink( get_page_by_path( 'dir4-contact-form' ))) ?>">For Public Relation</a></li>
                  <li class="subnav-item"><a href="<?php echo add_query_arg('subject', 'Addtional-inquiries', get_permalink( get_page_by_path( 'dir4-contact-form' ))) ?>">For additional inquiries</a></li>
           </ul>
        </div>
  	     <div class="column-right">
  	  	  
           <div class="content-column-right-wrapper">
              <h1 class="contact-map-header"><span class="white">DIR4</span> Map</h1>
              <img src="<?php bloginfo('template_url'); ?>/img/map-small.jpg" width="600" alt="DIR4 Map" />
              <div class="map-meta clearfix">
                <a href="https://maps.google.com/maps?q=dir4+films&hl=en&ll=13.731381,100.476837&spn=0.905803,1.279907&sll=13.723419,100.476232&sspn=0.905834,1.279907&hq=dir4+films&t=m&z=10&iwloc=A"  target="_blank">Google Map</a>
                <a href="<?php echo home_url('dir4_map.pdf');?>" target="_blank">Print Version</a>
              </div>
              <p class="contact-info">
                <span class="contact-label">Address </span>
                6/1 Soi Ari 5, Phahonyothin Rd., <br>Samsennai, Phayathai, Bangkok 10400, Thailand. 
              </p>
              <p class="contact-info">
                <span class="contact-label">T </span>+66 (0)2.617.0143<br>
                <span class="contact-label">F </span>+66 (0)2.617.0148<br>
                <span class="contact-label">M </span>producer@dir4films.com

              </p>
              
             <p class="contact-info"><span class="contact-label" style="color:#dbddde;">Links</span>&nbsp;&nbsp;&nbsp;
              <a href="http://www.ycomm.co.th" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/logo-ycomm.png" /></a></p>
              
              
           </div>

          
           
        </div>

      </div><!-- .row -->

    </div><!-- .content-main-panel -->

    
    

<?php get_footer(); ?>