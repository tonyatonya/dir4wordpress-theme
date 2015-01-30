<?php 
$slug = 'dir4-our-people';


get_header(); ?>

    <div class="content-main-panel" id="our-people-content">
      <div class="row" style="overflow:auto;">
      <!--
<div class="column-left">
      	 <ul id="our-people-filter">
                <li class="subnav-header">
                  <span class="black">DIR4</span><br/>
                  <span class="palegold">PEOPLE</span>
                </li>
                
<li class="subnav-item"><a href="#dir4-films">DIR4 FILMS</a></li>
                <li class="subnav-item"><a href="#dir4tv">DIR4 TV</a></li>
                <li class="subnav-item"><a href="#4by4">4BY4</a></li>
                <li class="subnav-item"><a href="#production-support">Production Support</a></li>

         </ul>
      </div>
	  <div class="column-right">
-->
	  	<div class="quote-slider-wrapper">
		  	<div class="quotemark topleft"></div>
		  	<div class="quotemark bottomright"></div>
	      	<ul id="quote-people" class="">
            <?php 
              $args = array(
                'posts_per_page'  => -1,
                'numberposts'     => -1,
                'post_type'       => 'people'
                );
              $people = get_posts($args);  ?>
            <?php foreach ($people as $person): ?>
              <?php $depts = get_the_terms( $person->ID, 'departments' );
                if ($depts): 
                  foreach ($depts as $d):
                    $dep[] = $d->slug;
                  endforeach; 
                  $departments = join(' ', $dep);
                endif;
              ?>
              <?php $quote = get_field('quote', $person->ID); 
              if (!empty($quote)):
              ?>
	      		<li class="<?php echo $departments;?>"><img src="<?php echo $quote;?>" />
					<div class="quote-detail">
						<div class="quoter"><?php echo $person->post_title; ?></div>
						<div class="quoter-position"><?php echo get_field('position', $person->ID);?></div>
					</div>
	      		</li>
          <?php endif; ?>
	        	<?php endforeach; ?>
	      	</ul>
        </div>
      </div>

      </div>

    </div>
    

<?php get_footer(); ?>