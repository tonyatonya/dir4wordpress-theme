<?php include('header.php'); //get_header(); ?>

		<div class="content-inner wedo" >
			<h1 class="service-header"><span class="white"><?php echo($desdep2_title); //GAIN KNOWLEDGE WITH EDUTAINMENT PROGRAMS?></h1>
			<p class="service-description">
			<?php
				echo($desdep2);
			/*
				At DIR4 TV, we produce TV programs, series or documentaries. Meaningful images as well as beauty of knowledge is our main concern.We provide a full production service to create high quality visuals.We are new generation content providers and the artistic visual makers.
				*/
				?>
			</p>
			<div class="open-client">
				<div class="enterbtn"><a href="#client" style="width:50px; height:25px; display:block;"></a></div>
				<script type="text/javascript">
					$(document).ready(function(){
						var target = $("#client");
						$(".enterbtn a").click(function(){
							//$(".content-inner").animate({target.offset().top},500)
							var wHeight = $(window).height();
							if((wHeight >= 600)||(wHeight <=800)){
								$("html, body").animate({ scrollTop: $(window).height()+230}, 1000);	
							}else if((wHeight >= 900)||(wHeight <= 1000)){
								$("html, body").animate({ scrollTop: $(window).height()+530}, 1000);		
							}
							
							
							return false;
						})
					})
				</script>
			</div>
			<!-- our client -->
			<div class="client-frame" id="#client">
				<h1 class="page-header"><?php echo($ourClient); //Our clients?></h1>
	        	<p class="page-description"><?php echo($ourClientLead); //We have worked with large companies from around the world.?></p>
	        	<div class="page-content-wrapper" style="margin: 0 25px 0 0;">
        		<img src="<?php bloginfo('template_url'); ?>/img/dir4-clients-main.png" style="width: 100%; margin-top:25px;"/>
		          <div class="client-list-wrapper">
		          	<?php $args = array(
							'post_type' => 'clients',
							'numberposts'     => -1,
							'orderby'=>'title'
						);
						
						
		          	$clients = get_posts($args); ?>
		            <div class="text-list client-list">
		              <?php foreach ($clients as $client): ?>
		              <div class="list-item" department="<?php $departments = wp_get_post_terms($client->ID, 'departments'); 
			                foreach ($departments as $dept):
			                	echo $dept->slug.' ';
			                endforeach;
		                ?>">
						<span><?php echo $client->post_title; ?></span>
		              </div>
		              <?php endforeach; ?>
		            </div>
		          </div>
    		</div>
			</div>
        	<!-- end our client -->
		</div>


<?php get_footer(); ?>