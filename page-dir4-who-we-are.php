<?php include('header.php');//get_header(); ?>
<div class="light-brown-wrapper pane row">
		<div class="who-we-are-header-content span5">
			<h1 class="thick-text"><span class="black">Ekalak</span><br/>
				<span class="gold">Lkunson</span></h1>
			<ul class="nav-thick-black">
				<li><a href="#">Ekalak's Biographiy</a></li>
				<li><a href="#">Works and styles</a></li>
			</ul>

			<h1 class="thick-text"><span class="black">DIR4</span><br/>
				<span class="gold">People</span></h1>

			<div class="nav-label black-stripe">Filtered: DIR4 People</div>
			<ul class="nav-thick-black">
				<li><a href="#">DIR4 FILMS</a></li>
				<li><a href="#">DIR4 TV</a></li>
				<li><a href="#">4BY4</a></li>
				<li><a href="#">Production support</a></li>
			</ul>
		</div>
		

		<div class="span5">
			<div class="quote-slider-wrapper">
				<div class="iosSlider">
					<div class="slider">
					<?php
						$args = array(
							'post_type' => 'directors',
							'numberposts' => -1,
							'orderby' => 'ID',
    						'order'   => 'ASC',
    				);
					$directors = get_posts( $args ); 

					foreach( $directors as $post ) : ?>
					<div class="slide">
							<?php $quotePicID = get_post_meta($post->ID, 'quote', true); 
								echo wp_get_attachment_image($quotePicID, 'medium');
							?>
						<div class="quoter"><?php echo $post->post_title; ?></div>
						<div class="quoter-position"><?php echo get_post_meta($post->ID, 'position', true); ?></div>

					</div>

					<?php endforeach; ?>
					</div>
					
				</div>
				<button class="prev-quote"><i class="icon-left-thin"></i></button>
				<button class="next-quote"><i class="icon-right-thin"></i></button>
			</div>
		</div>
</div>

<?php get_footer(); ?>