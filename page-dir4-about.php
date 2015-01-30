<?php include('header.php'); //get_header(); ?>
 <div class="content-main-panel" id="content-aboutus">
      <div class="row">
        <div class="column-left page-summary">
        	<h1 class="page-header">About us</h1>
        	<?php if (0) :?>
        	<p class="page-description">We are an integrated production company with a solid foundation. Founded in 2009, we continually seek to innovate and grow. We constantly work with international professional (Directors, DOP, Actors, etc...)</p>
        	
        	<div class="nav-about-wrapper">
	        <ul class="nav-about nav-vertical clearfix" id="subnav-about">
	          <li><a href="#idea">01 Idea</a><span class="arrow"></span></li>
	          <li><a href="#imagine">02 Imagine</a><span class="arrow"></span></li>
	          <li><a href="#produce">03 Produce</a><span class="arrow"></span></li>
	          <li><a href="#viola">04 Viola</a></li>
	        </ul>
	        <a  href="http://www.dir4films.com/pdf/files/COMPANY_PROFILE/company_profile.pdf" target="_blank"  class="btn-pdf btn-action">
	        	<?php echo($item_contact7); //Company Profile (pdf)?><span class="download"></span>
	        </a>
	      </div>
	      <?php endif; ?>
          
        </div>
		
    	<div class="column-right page-content page-content-about">
    		<div class="slide" id="idea">
    			<div class="about-wrapper">
    			  <h2 class="about-header">
    			  <?php echo($welcomeText); ?>
    			  <!--
RefineD DIRECTION <br>
   			      OF VISUAL MAKING<span class="orange"></span>
--></h2>
	    		<p class="about-description">
			
	    		</p>
    			</div>
    		</div>
    	
		<div class="slide" id="imagine">
	    		<div class="about-wrapper">
	    		  <h2 class="about-header">Dir4films<span class="orange"></span></h2>
	    		<p class="about-description">
	    		<?php
	    		echo($dir4aboutdetail1);
	    		/*
We define our own "fashion" by letting your hearts feel and perceive the naturalness<br>
spontaneously. Thing has million looks, we wait silently to see...to witness and to<br>
deliver the artistic angle. The meaningful of visual is a miracle once we feel the<br>
precious right moment. The refinement from seeing...hearing and feeling keep us<br>
alive. Arts live us and blend well to our soul. Ponder your heart, feel your breath,<br>
spend more time in every second and let them lead you to the best visual with<br>
effortless beauty . . . Dir4films                
				*/
				?>
	    		 </p>
    			</div>

    		</div>

    		<div class="slide" id="produce">
	    		<div class="about-wrapper">
	    		  <h2 class="about-header">Dir4TV</h2>
	    		<p class="about-description">
	    		<?php
	    		echo($dir4aboutdetail2);
	    		/*
is a refined visual maker team believing that educational and entertainment "TV programs" can be a great combination. Over the past 4 years of delivering precise "Contents" and refined visuals by the group of new-generation content providers who know what people in their age are looking for, we have experienced and made it digestible, relevant, touchy, and inspired. We are the group of passionate creator for TV programs determining to give audience something more than ordinary.                
	    		 */
	    		 ?>
	    		 </p>
    			</div>
    		</div>

    		<div class="slide" id="viola">
	    		<div class="about-wrapper">
	    		  <h2 class="about-header">4by4<span class="orange"></span></h2>
	    		<p class="about-description">
					<?php echo($dir4aboutdetail3); //Creative Visual House ?>
	    		 </p>
	    		
	    		<a href="http://www.dir4films.com/pdf/files/COMPANY_PROFILE/company_profile.pdf" target="_blank"  class="btn-pdf btn-action" style="position:fixed;bottom:112px;left:148px;margin-left:-98px; ">Company Profile (pdf)<span class="download"></span></a>
    			</div>

    		</div>

            <div id="about-us-arrows">
                <div id="arrow-up"></div>
                <div id="arrow-down"></div>
            </div>
    	</div>

      </div>
 </div>
<?php get_footer();?>
