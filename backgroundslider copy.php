<?php 
class background extends WP_Widget {
function background(){
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'background', 'description' => 'Manage Background ' );
		/* Widget control settings. */
		$control_ops = array( 'id_base' => 'background' );
		/* Create the widget. */
		$this->WP_Widget( 'background', 'Orange Background slider', $widget_ops, $control_ops );
	}
function widget($args , $instance){
?>
	<script type="text/javascript">

			jQuery(function($){
				
				$.supersized({
				
					// Functionality
					slide_interval          :   10000,		// Length between transitions
					transition              :   1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
					transition_speed		:	3000,		// Speed of transition
															   
					// Components							
					slide_links				:	'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
					slides 					:  	[// Slideshow Images
<?php
		extract($args);
		//$title = apply_filters('widget_title',$instance['title']);
		$backgroundimg1 = $instance['backgroundimg1'];
		$backgroundimg2 = $instance['backgroundimg2'];
		$backgroundimg3 = $instance['backgroundimg3'];
		$backgroundimg4 = $instance['backgroundimg4'];
		$backgroundimg5 = $instance['backgroundimg5'];
		$backgroundimg6 = $instance['backgroundimg6'];
		
		if(($backgroundimg1 != "Image URL") && (!empty($backgroundimg1))){
			$i = 0;
			$img[$i] =	$backgroundimg1;
		}
		if(($backgroundimg2 != "Image URL") && (!empty($backgroundimg2))){
			$i = $i+1;
			$img[$i] =	$backgroundimg2;
		}
		if(($backgroundimg3 != "Image URL") && (!empty($backgroundimg3))){
			$i = $i+1;
			$img[$i] =	$backgroundimg3;
		}
		if(($backgroundimg4 != "Image URL") && (!empty($backgroundimg4))){
			$i = $i+1;
			$img[$i] =	$backgroundimg4;
		}
		if(($backgroundimg5 != "Image URL") && (!empty($backgroundimg5))){
			$i = $i+1;
			$img[$i] =	$backgroundimg5;
		}
		if(($backgroundimg6 != "Image URL") && (!empty($backgroundimg6))){
			$i = $i+1;
			$img[$i] =	$backgroundimg6;
		}
			$j = $i+1;
		//script Area
		?>
		
		
					
		<?php for($i=0;$i<$j;$i++){?>
			{image : '<?php echo $img[$i] ?>', title : '', thumb : '', url : ''},
		<?php }?>

	    <?php
		echo $after_widget;
		?>
		
		]
					
				});
			});
		</script>	    		

		
		<?php
	}
	
	
	
		function update($new_instance , $old_instance){
			
			$instance = $old_instance;
			 $instance['backgroundimg1'] = strip_tags($new_instance['backgroundimg1']);
			 $instance['backgroundimg2'] = strip_tags($new_instance['backgroundimg2']);
			 $instance['backgroundimg3'] = strip_tags($new_instance['backgroundimg3']);
			 $instance['backgroundimg4'] = strip_tags($new_instance['backgroundimg4']);
			 $instance['backgroundimg5'] = strip_tags($new_instance['backgroundimg5']);
			 $instance['backgroundimg6'] = strip_tags($new_instance['backgroundimg6']);
			 return $instance;
		}

		function form($instance){
			$defaults = array(
					'backgroundimg1' => 'Image URL',
					'backgroundimg2' => 'Image URL',
					'backgroundimg3' => 'Image URL',
					'backgroundimg4' => 'Image URL',
					'backgroundimg5' => 'Image URL',
					'backgroundimg6' => 'Image URL'
				);
			$instance = wp_parse_args( (array) $instance, $defaults );
		?>
			<p>
				<label for="<?php echo $this->get_field_id('backgroundimg1');?>">background1 : </label><br>
				img :<input type="text" id="<?php echo $this->get_field_id('backgroundimg1'); ?>" name="<?php echo $this->get_field_name('backgroundimg1'); ?>" value = "<?php echo $instance['backgroundimg1']; ?>"/>
			</p>
			<p>
				<label for="<?php echo $this->get_field_id('backgroundimg2');?>">background2 : </label><br>
				img :<input type="text" id="<?php echo $this->get_field_id('backgroundimg2'); ?>" name="<?php echo $this->get_field_name('backgroundimg2'); ?>" value = "<?php echo $instance['backgroundimg2']; ?>"/>
			</p>
			<p>
				<label for="<?php echo $this->get_field_id('backgroundimg3');?>">background3 : </label><br>
				img :<input type="text" id="<?php echo $this->get_field_id('backgroundimg3'); ?>" name="<?php echo $this->get_field_name('backgroundimg3'); ?>" value = "<?php echo $instance['backgroundimg3'] ?>"/>
			</p>
			<p>
				<label for="<?php echo $this->get_field_id('backgroundimg4');?>">background4 : </label><br>
				img :<input type="text" id="<?php echo $this->get_field_id('backgroundimg4'); ?>" name="<?php echo $this->get_field_name('backgroundimg4'); ?>" value = "<?php echo $instance['backgroundimg4']; ?>"/>
			</p>
			<p>
				<label for="<?php echo $this->get_field_id('backgroundimg5');?>">background5 : </label><br>
				img :<input type="text" id="<?php echo $this->get_field_id('backgroundimg5') ?>" name="<?php echo $this->get_field_name('backgroundimg5'); ?>" value = "<?php echo $instance['backgroundimg5']; ?>"/>
			</p>
			<p>
				<label for="<?php echo $this->get_field_id('backgroundimg6');?>">background5 : </label><br>
				img :<input type="text" id="<?php echo $this->get_field_id('backgroundimg6') ?>" name="<?php echo $this->get_field_name('backgroundimg6'); ?>" value = "<?php echo $instance['backgroundimg6']; ?>"/>
			</p>
		<?php }
}?>