<?php /* Start the Loop */ 
	//post_type_archive_title();
?>
<ul class="unstyled item-grid-list">
<?php while ( have_posts() ) : the_post(); ?>

	<?php
		/* Include the Post-Format-specific template for the content.
		 * If you want to overload this in a child theme then include a file
		 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
		 */
		get_template_part( 'content', 'our_work');
	?>

<?php endwhile; ?>
</ul>