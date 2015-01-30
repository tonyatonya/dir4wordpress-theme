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
	  <dd><?php the_content(); ?></dd>
	  <dt>info //</dt>
	  <dd>Product: <?php echo get_post_meta($post->ID, 'product', true); ?><br>
Title: <br>
Client: <?php echo get_post_meta($post->ID, 'client', true); ?><br>
Format: 35MM 16:9</dd>
	  <dt>director //</dt>
	  <dd><?php echo get_post_meta($post->ID, 'director', true); ?></dd>
	  <dt>the team //</dt>
	  <dd><?php echo get_post_meta($post->ID, 'the_team', true); ?></dd>
	</dl>
</div>