<?php 
$slug2 = 'dir4-company-overview';

get_header(); ?>

<div class="row" id="company-overview">
 <div class="co-left-column">
   <?php get_template_part('nav-about');?>
 </div>
 <div class="co-right-column">
   
  <section class="topic-1">
    <div class="t-value">
      <div class="thousand">
        <span>2</span>
        <span>3</span>
        <span>4</span>
        <span>5</span>
        <span>6</span>
        <span>7</span>
        <span>8</span>
        <span>9</span>
        <span>0</span>
        <span>1</span>
        <span>2</span>
      </div>
      <div class="hundred">
        <span>0</span>
        <span>1</span>
        <span>2</span>
        <span>3</span>
        <span>4</span>
        <span>5</span>
        <span>6</span>
        <span>7</span>
        <span>8</span>
        <span>9</span>
        <span>0</span>
      </div>
      <div class="deci">
        <span>0</span>
        <span>1</span>
        <span>2</span>
        <span>3</span>
        <span>4</span>
        <span>5</span>
        <span>6</span>
        <span>7</span>
        <span>8</span>
        <span>9</span>
        <span>0</span>
      </div>
      <div class="unit">
        <span>9</span>
        <span>0</span>
        <span>1</span>
        <span>2</span>
        <span>3</span>
        <span>4</span>
        <span>5</span>
        <span>6</span>
        <span>7</span>
        <span>8</span>
        <span>9</span>
      </div>
    </div>
    <div class="t-refine">refine</div>
    <div class="t-title">Direction of<br><span class="orange">Visual Making</span></div>
    <div class="t-detail">DIR4 was founded in 2009 with a mission to provide exceptionally high-quality production with an emphasis on refined direction of film making and as a result, give competitive advantages to the businesses of our clients.</div>
    
    
  </section>

    <div class="company-overview-logos">
         <ul>
            <li><a href="<?php echo get_permalink( get_page_by_path( 'dir4films/dir4films-featured-work' ) ) ?>" class="nav-logo dir4films white"></a></li>
            <li><a href="<?php echo get_permalink( get_page_by_path( 'dir4tv/dir4tv-featured-work' ) ) ?>" class="nav-logo dir4tv white"></a></li>
            <li><a href="<?php echo get_permalink( get_page_by_path( '4by4/4by4-featured-work' ) ) ?>" class="nav-logo fbyf white"></a></li>
          </ul>
    </div>
 </div>
</div>


<?php get_footer(); ?>