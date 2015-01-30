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
	<?php
		extract($args);
		//$title = apply_filters('widget_title',$instance['title']);
		$backgroundimg1 = $instance['backgroundimg1'];
		$backgroundimg2 = $instance['backgroundimg2'];
		$backgroundimg3 = $instance['backgroundimg3'];
		
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
		}			$j = $i+1;
		//script Area
		?>
					
		<?php for($i=0;$i<$j;$i++){?>
			<div class="slidebg" style="background:url(<?php echo $img[$i] ?>);"></div>
		<?php }?>

	    <?php
		echo $after_widget;
		?>
		<?php
	}
	
	
	
		function update($new_instance , $old_instance){
			
			$instance = $old_instance;
			 $instance['backgroundimg1'] = strip_tags($new_instance['backgroundimg1']);
			 $instance['backgroundimg2'] = strip_tags($new_instance['backgroundimg2']);
			 $instance['backgroundimg3'] = strip_tags($new_instance['backgroundimg3']);
			 return $instance;
		}

		function form($instance){
			$defaults = array(
					'backgroundimg1' => 'Image URL',
					'backgroundimg2' => 'Image URL',
					'backgroundimg3' => 'Image URL',
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
		<?php }
}?>