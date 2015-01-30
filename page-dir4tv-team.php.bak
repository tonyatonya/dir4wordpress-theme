<?php 
get_header(); ?>

<div class="content-main-panel" id="dir4films-directors">
  <div class="chair"></div>
  <div class="directors-list-wrapper">
    <ul class="directors-list">
     <?php 
        $args = array(
          'post_type' => 'people',
          'category'  => 'director',
          'departments' => 'dir4-films',
          'numberposts' => -1);  
        $directors = new WP_Query($args);
         while ($directors->have_posts()): $directors->the_post(); ?>
         <?php $nickname = get_field('nick_name', $get_the_ID); ?>
      <li><a href="<?php echo the_permalink(); ?>">
        <div class="nickname"><?php echo (!empty($nickname) ? $nickname : get_the_title() ); ?></div>
        <div class="fullname"><?php the_title(); ?>
          <?php if (!empty($nickname)): ?>
          <span class="small"><?php echo $nickname; ?></span>
          <?php endif; ?>
        </div>
      </a></li>
      <?php endwhile; ?>
    </ul>
  </div>
</div>
    

<?php get_footer(); ?>