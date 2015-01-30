<?php 
$slug = 'dir4-company-overview dir4-mission-statement';

get_header(); ?>
<div class="row" id="company-overview">
 <div class="co-left-column">
   <?php get_template_part('nav-about');?>
 </div>
 <div class="co-right-column">
   <div class="ms-txt-wrapper">
    <img src="<?php bloginfo('template_url'); ?>/img/mission-statement.png" class="full-width"/>
    <div class="ms-txt1">A company</div>
    <div class="ms-txt2">that is <span class="orange">highly</span></div>
    <div class="ms-txt3">Creative<span class="white">&amp;</span></div>
    <div class="ms-txt4 orange">Innova-<br>tive</div>
  </div>

 </div>
</div>


<?php get_footer(); ?>