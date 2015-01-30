<?php
/**
 * The Showreel Template
 *
 */
get_header(); ?>
<div class="pane">
<ul class="unstyled item-grid-list" style="margin-top:60px;">
<?php
	$args = array(
		'post_type' => 'our_work',
		'numberposts' => -1);
	$works = get_posts( $args ); 


	foreach( $works as $post ) :	setup_postdata($post); ?>

	<li class="ourwork-item">
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail('thumbnail'); ?>
			<div class="ourwork-detail-panel">
				<?php 
	   				$videoMeta = get_post_meta($post->ID, '_fvp_video', true);
	   				$videoArr = unserialize($videoMeta); ?>
				<a href="<?php echo $videoArr['full'];?>“&width=90%&height=90%" class="diamond btn-play-video small" rel="prettyPhoto">
					<span>play</span>
				</a>
				<h4><?php the_title(); ?></h4>
				<a href="#" class="btn-more-info">see info //</a>
				<div class="blackbox small"></div>
				<div class="blackbox"></div>
				
			</div>
		</a>
	</li>

<?php endforeach; ?>
</ul>
</div>

<?php get_footer(); ?>