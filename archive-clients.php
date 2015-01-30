<?php include('header.php'); //get_header(); ?>
 <div class="content-main-panel" id="content-our-clients">
      <div class="row">
        <div class="column-left page-summary">
        	<h1 class="page-header"><?php echo($ourClient); //Our clients?></h1>
        	<p class="page-description"><?php echo($ourClientLead); //We have worked with large companies from around the world.?></p>
        </div>
    	<div class="column-right page-content">
    	
    		<div class="page-content-wrapper" style="margin: 0 25px 0 0;">
    	  
		    	  <div class="client-main">
			    	  <img src="<?php bloginfo('template_url'); ?>/img/dir4-clients-main.png" style="width: 100%;"/>
		    	  </div>
		
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

      </div>

    </div>
<?php get_footer(); ?>
