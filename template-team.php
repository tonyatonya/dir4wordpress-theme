<?php 
/*
Template Name: Our team
*/
//get_header();
include('header.php');
?>
<div class="company-content">
	<div class="our-team-container">
		<div class="our-team-list">
		<?php 
		$dropName = array('noon', 'mameaw', 'j', 'tong', 'stang', 'praew');
		$args = array(    
				'posts_per_page' => -1,
			 	'post_type' => 'people',
			 	 'tax_query' => array (       
			 	 		array (          
			 	 			'taxonomy' => 'departments',
			 	            'field' => 'slug',
			 	            'terms' => department
			 	        )
			 	     ) 
			 	 ); 
			 	 query_posts($args); 
			 	 if ( have_posts() ) : 				 
				 	 while (have_posts()): the_post();
				 	//echo '....' . get_post_field('nick_name');
				 	$position = wp_get_object_terms(get_the_ID(), 'position'); 
				 	if(in_array(strtolower(get_field('nick_name')), $dropName)){
				 		//echo 'drop';
				 		//echo get_post_field('nick_name');
				 		//exit();
				 		
				 	}else if(strtolower($position[0]->name) == 'director'){

				 	}else{
				 	?>

				 	<div class="team-item">
				 		<div class="team-image"><?php the_post_thumbnail('team-thumbnail');?></div>
				 		<h3 class="team-title"><?php the_field('nick_name'); ?></h3>
				 		<div class="team-detail"><?php 
				 			
				 			echo($position[0]->name);
				 			?>
				 		</div>
				 		<div class="team-detail"><?php the_field('education'); ?></div>
				 		<div class="team-detail"><?php the_field('experience'); ?></div>
				 		<div class="team-detail team-quote">"<?php the_field('quote'); ?>"</div>
				 	</div>
				 	<?php
				 }
				 	?>
		<?php endwhile; 
			endif;
		?>
		</div>

	</div>
</div>
<?php get_footer(); ?>