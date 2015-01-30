<?php get_header(); ?>
<div class="single-reels-container">
	<div class="reel-toolbar">
		<a href="javascript:history.go(-1)" class="link-text link-big link-back-to-showreels"><i class="icon-left-arrow"></i> Back to showreels</a>
		<div class="link-text link-big link-next-showreel pull-right">
		<?php previous_post_link( '%link', 'NEXT <i class="icon-right-arrow"></i>' ); ?>
		</div>
	</div>
	<?php 	
		$videoMeta = get_post_meta(get_the_ID(), '_fvp_video', true);
	?>
	<h1><?php the_title(); ?></h1>

	<div class="reel-media-container">
		<div class="reel-video-wrapper">
		<iframe src="http://player.vimeo.com/video/<?php echo $videoMeta['id'];?>?color=fb5220&show_title=0&show_portrait=0&byline=0" width="554" height="300" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
		</div>
		<div class="reel-photos-wrapper">
			<?php $ph1 = get_field('photo1'); ?>
			<img src="<?php the_field('photo2'); ?>" />
			<img src="<?php the_field('photo3'); ?>" />
			<img src="<?php the_field('photo4'); ?>" />
			<img src="<?php the_field('photo5'); ?>" />
			<img src="<?php the_field('photo6'); ?>" />
		</div>

	</div>

	<div class="reel-information">
		<dl class="dl-horizontal">
		  <dt>Product</dt>
		  <dd><?php the_field('product'); ?>&nbsp;</dd>
		  <dt>Title</dt>
		  <dd><?php the_title(); ?></dd>
		  <?php $client = wp_get_post_terms( get_the_ID(), 'clients' ) ?>
		  <dt>Client</dt>
		  <dd><?php echo $client[0]->name;?></dd>
		  <?php $director = wp_get_post_terms( get_the_ID(), 'people' ) ?>
		  <dt>Director</dt>
		  <dd><?php echo $director[0]->name;?></dd>
		  
		</dl>
	</div>
</div>
<?php get_footer(); ?>