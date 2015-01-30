<?php get_header(); ?>
<div class="client-wrapper row">
	<div class="span12" style="position:relative;">
		<a href="#" class="btn-back-to-client-list"><i class="icon-chevron-left icon-white"></i> Back to client list</a>
		
		<div class="client-list-wrapper span3">
			<ul class="list text-link-list" id="client-list">
			<?php
			$args = array(
				'post_type' => 'clients',
				'numberposts' => -1);
				$clients = get_posts( $args ); 

			foreach( $clients as $post ) :	setup_postdata($post); ?>

			<li class="client-item">
				<a href="<?php the_permalink(); ?>" class="text-link" company="<?php echo strtolower(get_field('client_of')); ?>">
					<?php the_title(); ?>

				</a>
			</li>

			<?php endforeach; ?>
			</ul>
		</div>

		<div class="client-article-wrapper span4">

		</div>
	</div><!-- .span12 -->
</div>

<div class="our-client-wrapper pane">
	<div class="heart-container">
	<?php
		$hearts = array();
		$hearts[0] = array(0, 1, 1, 1, 0, 1, 1, 1, 0);
		$hearts[1] = array(1, 1, 1, 1, 1, 1, 1, 1, 1);
		$hearts[2] = array(1, 1, 1, 1, 1, 1, 1, 1, 1);
		$hearts[3] = array(1, 1, 1, 1, 1, 1, 1, 1, 1);
		$hearts[4] = array(0, 1, 1, 1, 1, 1, 1, 1, 0);
		$hearts[5] = array(0, 0, 1, 1, 1, 1, 1, 0, 0);
		$hearts[6] = array(0, 0, 0, 1, 1, 1, 0, 0, 0);
		$hearts[7] = array(0, 0, 0, 0, 1, 0, 0, 0, 0);

		for ($r = 0 ; $r < count($hearts); $r++):
			for ($i = 0; $i < count($hearts[$r]); $i++): 
				if ($hearts[$r][$i]): ?>
				<div class="heart-block" style="left:<?php echo ($i * 50); ?>px;top:<?php echo ($r * 50);?>px"></div>
			<?php endif; 
			endfor;
		endfor;?>
	</div>
	<div class="client-menu-wrapper">
		<h1><span class="black">Happy</span><br/>
			<span class="gold">Clients</span><br/>
			we have worked for</h1>

		<div class="client-filter-label">Filtered: Clients of</div>
		<ul id="filter-client-by-company">
			<li><a href="#" company="dir4films">DIR4 FILMS</a></li>
			<li><a href="#" company="dir4tv">DIR4 TV</a></li>
			<li><a href="#" company="4by4">4BY4</a></li>
			<li><a href="#" company="productionsupport">Production support</a></li>
		</ul>
	</div>
	
</div>
<?php get_footer(); ?>