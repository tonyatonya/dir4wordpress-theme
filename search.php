<?php
/*
Search
*/
get_header();
?>
<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyeleven' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
<ul class="showreel-list">
		<?php
		global $query_string;
		$args = array(
			'posts_per_page' => -1,
			'post_type' => 'reels',
			'tax_query' => array(
				array(
					'taxonomy' => 'departments',
					'field' => 'slug',
					'terms' => 8
				)
			)
		);
		query_posts($args);
		 	if ( have_posts() ) : 				 
			 	 while (have_posts()): the_post();			 	
			 	$director = wp_get_object_terms(get_the_ID(), 'people');
			 	$type = wp_get_object_terms(get_the_ID(), 'departments');
			 	?>
					
					
					    	<h3><?php the_title(); echo ' => ' .$type[0]->name . ' : ' . $director[0]->name?></h3>


			<?php endwhile; 
			  endif; 
			  ?>
	</ul>