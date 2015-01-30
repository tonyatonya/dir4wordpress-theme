<?php
/**
 * The Showreel Template
 *
 */
get_header(); 

?>

<div class="layer--2">
	<div class="img-center-line">
		<div class="left-column">
		<?php for ($i=0;$i<20;$i++): 
			$w = rand(100, 300);
			$h = rand(50, 200);
			$m = rand(0, 50); 
			$hang = ($i%2 == 0) ? 'hang-left' : 'hang-right';
			?>
			<div class="grey-frame" style="width:<?php echo $w;?>px;height:<?php echo $h;?>px;margin:<?php echo $m;?>px;">
				<img class="<?php echo $hang ?>" src="http://lorempixel.com/<?php echo $w; ?>/<?php echo $h;?>/fashion" 
					 width="<?php echo $w;?>" height="<?php echo $h; ?>" 
					 />
			</div>
		<?php endfor; ?>
		</div>
		<div class="right-column">
		<?php for ($i=0;$i<20;$i++): 
			$w = rand(100, 300);
			$h = rand(50, 200);
			$m = rand(0, 50); 
			$hang = ($i%2 == 0) ? 'hang-left' : 'hang-right';
			?>
			<div class="grey-frame" style="width:<?php echo $w;?>px;height:<?php echo $h;?>px;margin:<?php echo $m;?>px;">
				<img class="<?php echo $hang ?>" src="http://lorempixel.com/<?php echo $w; ?>/<?php echo $h;?>/fashion" 
					 width="<?php echo $w;?>" height="<?php echo $h; ?>" 
					 />
			</div>
		<?php endfor; ?>
		</div>
	</div>
</div>

<div class="layer--1">
	<div class="img-center-line">
		<div class="left-column">
		<?php for ($i=0;$i<20;$i++): 
			$w = rand(200, 400);
			$h = rand(100, 300);
			$m = rand(100, 200); 
			$hang = ($i%2 == 0) ? 'hang-left' : 'hang-right';
			?>
			<div class="grey-frame" style="width:<?php echo $w;?>px;height:<?php echo $h;?>px;margin:<?php echo $m;?>px;">
				<img class="<?php echo $hang ?>" src="http://lorempixel.com/<?php echo $w; ?>/<?php echo $h;?>/fashion" 
					 width="<?php echo $w;?>" height="<?php echo $h; ?>" 
					 />
			</div><?php endfor; ?>
		</div>
		<div class="right-column">
		<?php for ($i=0;$i<20;$i++): 
			$w = rand(200, 400);
			$h = rand(100, 300);
			$m = rand(100, 200); 
			$hang = ($i%2 == 0) ? 'hang-left' : 'hang-right';
			?>
			<div class="grey-frame" style="width:<?php echo $w;?>px;height:<?php echo $h;?>px;margin:<?php echo $m;?>px;">
				<img class="<?php echo $hang ?>" src="http://lorempixel.com/<?php echo $w; ?>/<?php echo $h;?>/fashion" 
					 width="<?php echo $w;?>" height="<?php echo $h; ?>" 
					 />
			</div>
		<?php endfor; ?>
		</div>
	</div>
</div>

<div class="layer-0">
	<div class="pane" id="pane-0">

			<h1 class="black-strip">Refine direction of making
				<strong>Visualization</strong></h1>

	</div>
	<div class="pane pane-dir4film" id="pane-1">
		<h1 class="black-strip"><a href="<?php echo get_permalink(get_page_by_title( 'dir4films' )->ID); ?>">DIR4 Films</a>
			Providing endless creativity and solution since 2009
		</h1>

	</div>
	<div class="pane pane-dir4tv" id="pane-2">

			<h1 class="black-strip"><a href="<?php echo get_permalink(get_page_by_title( 'dir4tv' )->ID); ?>">DIR4 TV</a>
				TV Program innovator
			</h1>

	</div>
	<div class="pane pane-4by4" id="pane-3">

			<h1 class="black-strip"><a href="<?php echo get_permalink(get_page_by_title( '4by4' )->ID); ?>">4BY4 Production</a>
				Compact passionate visual maker
			</h1>

	</div>
	<div class="pane pane-production-support" id="pane-4">

			<h1 class="black-strip"><a href="<?php echo get_permalink(get_page_by_title( 'production-support' )->ID); ?>">Production Support</a></h1>

	</div>

</div>

<a href="#" class="btn-next-page btn-what-we-do-next triangle-right "></a>

<?php get_footer(); ?>