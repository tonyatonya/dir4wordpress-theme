<?php get_header(); ?>

    <div class="content-main-panel" id="content-our-clients">
      <div class="row">
        <div class="column-left">
        	<ul>
              <li class="subnav-header">
                <span class="red">HAPPY</span><br/>
                <span class="palegold">CLIENT</span><br/>
                <span class="white">WE HAVE WORKED FOR</span>
              </li>
              <?php if (0):?>
              <li class="subnav-item"><a href="<?php echo add_query_arg('dep', 'dir4-films', get_post_type_archive_link('clients'));
    ?>">DIR4 FILMS</a></li>
              <li class="subnav-item"><a href="<?php echo add_query_arg('dep', 'dir4-tv', get_post_type_archive_link('clients'));
    ?>">DIR4 TV</a></li>
              <li class="subnav-item"><a href="<?php echo add_query_arg('dep', '4by4', get_post_type_archive_link('clients'));
    ?>">4BY4</a></li>
              <li class="subnav-item"><a href="<?php echo add_query_arg('dep', 'production-support', get_post_type_archive_link('clients'));
    ?>">Production Support</a></li>
    		<?php endif; ?>
           </ul>
           
        </div>
    	  <div class="column-right">
    	  	
          <div class="client-list-wrapper">
           <a href="<?php echo get_post_type_archive_link('clients');?>" class="text-link">BACK TO CLIENT LIST</a>
           <?php $args = array(
					'post_type' => 'reels',
					'numberposts'     => -1,
					'clients' => $post->post_name
				);
          	$reels = new WP_Query($args); ?>
          	<div class="client-header">
          		<div class="client-switcher">
          			<!-- <a href="#" class="btn-direction up"></a>
          			<a href="#" class="btn-direction down"></a> -->
          		</div>
          		<h1 class="client-header"><?php the_title(); ?></h1>
          		
          	</div>
          	<div class="playlist-wrapper">
          		<ul class="playlist bxslider" id="single-client-playlist">
		        <?php while ($reels->have_posts()): $reels->the_post();?>
					<li class="playbox">
						<?php 
				   		 //the_post_thumbnail('large'); 
				   		$videoArr = get_post_meta(get_the_ID(), '_fvp_video', true);
				   		#$src = get_video_thumbnail($videoArr['full'], 'large')
				   		#$tn = getimagesize($src);
				   		?>

		             <div class="vimeo-wrapper"><?php the_post_thumbnail( ); ?>
						
		             </div>
		             <a href="<?php echo $videoArr['full'];?>" class="btn-play diamond"><span>play</span></a>
		             <h4 class="playbox-title"><?php the_title(); ?></h4>
		             <p class="playbox-description"><?php the_content(); ?></p>
		           </li>
		        <?php endwhile; ?>
	        	</ul>
		    </div>

           
          </div>
        </div>

      </div>

    </div>
    

<?php get_footer(); ?>