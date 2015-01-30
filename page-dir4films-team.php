<?php include('header.php');//get_header();?>
 <?php $args = array(
		'post_type' => 'people',
		'numberposts'     => -1,
		'departments' => 'dir4-films'
	);
	$teams = new WP_Query($args); ?>
<div class="bx-slider-wrapper dir4films-team-slider-wrapper">
	<ul class="bxslider" id="dir4films-team-slider">
<?php 
	$tns = array();
	while ($teams->have_posts()): $teams->the_post();?>
		<li class="dir4films-team-item">
			<div class="team-item-wrapper">
				<h2 class="team-header"><?php the_title(); ?><br><span class="white"><?php the_field('position'); ?></span></h2>
				<p><span class="darkgold">Email</span> <?php the_field('email'); ?></p>
			</div>
	   </li>
    <?php endwhile; ?>
	</ul>
</div>
<?php get_footer(); ?>