<?php get_header(); ?>
<div class="content-left-column">
	<h1>DIR4<br>SHOW-<br>REELS</h1>
</div>
<div class="showreels-container">

		<div class="showreel-row showreel-dir4films">
			<?php $args = array(
		      'post_type'       => 'reels',
		      'departments'		=> 'dir4-films',
		      'posts_per_page'  =>-1,
		      'numberposts'     => -1
		    );
		    $films_reels = new WP_Query($args); ?>
			<div class="showreel-row-header"></div>
			<div class="showreel-list-wrapper nano">
				<ul class="showreel-list clearfix content" style="width:<?php echo $films_reels->post_count * 120 ; ?>px">
					<?php while ($films_reels->have_posts()): $films_reels->the_post();?>
					<li class="showreel-item title-under">
						<a class="showreel-item-thumbnail" href="<?php the_permalink();?>">
							<?php the_post_thumbnail( array(110, 62) ); ?>
							<!-- <img src="http://placehold.it/110x62" class="showreel-thumbnail" /> -->
						</a>
						<a class="showreel-item-header" href="<?php the_permalink();?>"><?php the_title(); ?></a>
						
					</li>
					<?php endwhile; ?>			
				</ul>
			</div>
		</div>

		<div class="showreel-row showreel-dir4tv">
			<?php $args = array(
		      'post_type'       => 'reels',
		      'departments'		=> 'dir4-tv',
		      'posts_per_page'  =>-1,
		      'numberposts'     => -1
		    );
		    $tv_reels = new WP_Query($args); ?>
			<div class="showreel-row-header"></div>
			<div class="showreel-list-wrapper nano">
				<ul class="showreel-list clearfix content" style="width:<?php echo $tv_reels->post_count * 120 ; ?>px">
					<?php while ($tv_reels->have_posts()): $tv_reels->the_post();?>
					<li class="showreel-item title-under">
						<a class="showreel-item-thumbnail" href="<?php the_permalink();?>">
							<?php the_post_thumbnail( array(110, 62) ); ?>
							<!-- <img src="http://placehold.it/110x62" class="showreel-thumbnail" /> -->
						</a>
						<a class="showreel-item-header" href="<?php the_permalink();?>"><?php the_title(); ?></a>
						
					</li>
					<?php endwhile; ?>			
				</ul>
			</div>
		</div>

		<div class="showreel-row showreel-4by4">
			<?php $args = array(
		      'post_type'       => 'reels',
		      'departments'		=> '4by4',
		      'posts_per_page'  =>-1,
		      'numberposts'     => -1
		    );
		    $fbf_reels = new WP_Query($args); ?>
			<div class="showreel-row-header"></div>
			<div class="showreel-list-wrapper nano">
				<ul class="showreel-list clearfix content" style="width:<?php echo $fbf_reels->post_count * 120 ; ?>px">
					<?php while ($fbf_reels->have_posts()): $fbf_reels->the_post();?>
					<li class="showreel-item title-under">
						<a class="showreel-item-thumbnail" href="<?php the_permalink();?>">
							<?php the_post_thumbnail( array(110, 62) ); ?>
							<!-- <img src="http://placehold.it/110x62" class="showreel-thumbnail" /> -->
						</a>
						<a class="showreel-item-header" href="<?php the_permalink();?>"><?php the_title(); ?></a>
						
					</li>
					<?php endwhile; ?>	
				</ul>
			</div>
		</div>


</div>
<?php get_footer(); ?>