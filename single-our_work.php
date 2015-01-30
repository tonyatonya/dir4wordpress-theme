<?php
/* page-featured-work */

get_header(); ?>
<div class="pane">
<?php while ( have_posts() ) : the_post(); ?>
	<div class="bg-video">
	   	<?php 
	   		 //the_post_thumbnail('large'); 
	   		$videoMeta = get_post_meta($post->ID, '_fvp_video', true);
	   		$videoArr = unserialize($videoMeta); ?>
	   		<img src="<?php echo get_video_thumbnail($videoArr['full'], 'large'); ?>" width="100%"/>
	   	<?php //echo the_post_video(array(600, 400)); ?>
		<a href="<?php echo $videoArr['full'];?>" class="diamond btn-play-video">
			<span>play</span>
		</a>
	</div>
	<div class="work-title-overlay">
		<h1><?php the_title(); ?></h1>
		<a href="#" class="btn-open-work-detail">more //</a>
	</div>
	<div class="work-detail-panel" >
		<button class="btn-close-work-detail pull-right"><span></span></button>
		<dl class="dl-horizontal">
		  <dt>about //</dt>
		  <dd><p>Beauty is timeless, yet the definition of beauty never seems to stop evolving. In our latest
spot with Beiersdorf Thailand for NIVEA’s new facial foam, we tried to portray a new skin
quality platform for facial skin where the skin is not only clear and bright but also has a
pinkish tone with radiant glow from being properly moisturized.</p>
<p>Together with Beierdorf Thailand, we spent a long time researching for the best make-up
artist who can create such beautiful and healthy look for the new skin quality platform.
With an extensive process of exploration, we finally discovered one outstanding make-up
artist from Korea, Kim Sueng-Won, whose reputation is widely recognized throughout the
world. We flew him in specifically for this spot to ensure that we achieved the desired look
for the new type of healthy glowing skin.</p></dd>
		  <dt>info //</dt>
		  <dd>Product: NIVEA Visage Facial Foam<br>
Title: Key<br>
Client:<br>
Format: 35MM 16:9</dd>
		  <dt>director //</dt>
		  <dd>Ekalak Klunson</dd>
		  <dt>the team //</dt>
		  <dd>DP: Tom Panya<br>
Creative Team: Draft FCB Team<br>
Producer Team: P’Bam, Praew, Toon, OUm, Tui</dd>
		</dl>
	</div>
<?php endwhile; // end of the loop. ?>
</div>
<?php get_footer(); ?>
?>