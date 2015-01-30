<?php get_header(); ?>

    <div class="content-main-panel" id="job-opportunity">
      <div class="row">
        <div class="column-left grey-background">
        	 <ul>
                  <li class="subnav-header">
                    <span class="palegold">JOBS</span><br/>
                    <span class="black">OPPOTU-</span><br>
                    <span class="black">NITY</span>
                  </li>
                  <?php 
                  $args = array(
                    'post_type' => 'jobs',
                    'numberposts' => -1
                  );
                  $jobs = new WP_Query($args); 
                  while ($jobs->have_posts()): $jobs->the_post();?>
                  <li class="subnav-item"><a href="<?php echo add_query_arg('job', $post->post_name, get_permalink( get_page_by_path( 'dir4-job-opportunity' ))); ?>"><?php the_title(); ?></a></li>
                  <?php endwhile; ?>
           </ul>
        </div>
        <?php wp_reset_postdata(); ?>


  	     <div class="column-right">
  	  	  <?php if (isset($_GET['job'])): ?>

           <div class="joblist-wrapper">
            <ul class="vertical-list" id="job-list">
              <?php
                  $args = array(
                    'post_type' => 'jobs',
                    'name' => $_GET['job']
                  );
                  $job = new WP_Query($args); ?>

                  <?php if ($job->have_posts()): while ($job->have_posts()): $job->the_post();?>
              <li class="job-item">
                <?php 
                  $depts = wp_get_post_terms(get_the_ID(), 'departments');
                  if ($depts):
                    $arr = array();
                  foreach ($depts as $dp):
                    $arr[] = $dp->name;
                  endforeach;
                  echo '<span class="job-company">('.join(',', $arr).')</span>';
                  endif;
                ?>
                <span class="job-post-date"><?php the_date('d/m/yy'); ?></span>
                <h3 class="job-title"><?php the_title(); ?></h3>
                <span class="job-res-header">Responsibilities</span>
                <p class="job-detail">
                  <?php the_content(); ?>
                </p>
                <div class="job-item-footer">
                  <span class="job-contact-label">Contact </span><a href="mailto:hr@dir4films.com">hr@dir4films.com</a>
                </div>
              </li>
            <?php endwhile; endif; ?>
            </ul>
           </div>

         <?php endif; ?>
        </div>

      </div><!-- .row -->

    </div><!-- .content-main-panel -->
    

<?php get_footer(); ?>