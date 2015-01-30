<style>
		
</style>
<?php include('header.php'); //get_header(); ?>
<div style="width:100%;height:100%;position:fixed;">
<iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=dir4&amp;hl=en&amp;sll=13.723419,100.476232&amp;sspn=0.840468,1.271667&amp;hq=dir4&amp;t=m&amp;ie=UTF8&amp;hnear=&amp;cid=8401978768977142337&amp;source=embed&amp;z=10&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?q=dir4&amp;hl=en&amp;sll=13.723419,100.476232&amp;sspn=0.840468,1.271667&amp;hq=dir4&amp;t=m&amp;ie=UTF8&amp;hnear=&amp;cid=8401978768977142337&amp;source=embed&amp;z=10&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small></td><td align="right"><small><a href="http://www.embedgooglemap.com">embed google map</a></small></td></tr></table></div>
<div id="map-foreground" style="position:fixed; width:100%;height:100%; background-color:rgba(0,0,0,1); pointer-events:none;opacity:0.85;"></div>

 <div class="content-main-panel" id="content-contactus">
      <div class="row">
      	
        <div class="column-left page-summary">
        	<h1 class="page-header"><?php echo($item_contact1); //Contact us?></h1>
        	<?php if (0): ?>
        	<p class="page-description">Do you need any information? We would love to call you back and answer you questions. You can fill our form and we’ll get back to you shortly.</p>
        	<div class="seperator"></div>
        	<?php endif; ?>
        	<p class="page-description">
        		<span class="bold">DIR4 Co., Ltd.</span><br>
				6/1 Soi Ari 5, Paholyothin Rd. <br>
				Samsennai, Phayathai, <br>
				Bangkok 10400, Thailand.
			</p>
			<p class="page-description contact-detail">
				<span class="bold">T.</span> +66 (0)2.617.0143<br>
				<span class="bold">F.</span> +66 (0)2.279.1448<br>
				<span class="bold">E.</span> producer@dir4films.com<br>
				<span class="bold">E.</span> marketing@dir4films.com
				</p>
        	
	        <a href="https://maps.google.com/maps?q=dir4&hl=en&sll=13.723419,100.476232&sspn=0.840468,1.271667&hq=dir4&t=m&ie=UTF8&hnear=&cid=8401978768977142337&source=embed&z=10&iwloc=A&output=embed" target="_blank" class="btn-googlemap btn-action"><?php echo($item_contact5); //Google Map?><span class="marker"></span></a><br>
	        <a href="http://www.dir4films.com/pdf/files/PRINT_VERSION/print-version.pdf"  target="_blank" class="btn-action"><?php echo($item_contact6); //Print Version?><span class="print"></span></a><br>
	       <a href="http://www.dir4films.com/pdf/files/COMPANY_PROFILE/company_profile.pdf"  target="_blank" class="btn-pdf btn-action"><?php echo($item_contact7); //Company Profile (pdf)?><span class="download"></span></a><br>
	       
	       
	       <div class="contact-form-panel">
	      		<form class="contact-form clearfix" id="contactform">
	      			<fieldset class="form-left">
	      			  <div class="form-row">
	      			    <label><?php echo($label_contact1); //Name?></label>
	      			    <input type="text" name="name" id="name" />
	      			  </div>
	      			  <div class="form-row">
	      			    <label><?php echo($label_contact2); //Email?></label>
	      			    <input type="text" name="email" id="email" />
	      			  </div>
	      			  <div class="form-row">
	      			    <label><?php echo($label_contact3); //Phone?></label>
	      			    <input type="text" name="phone" />
	      			  </div>
	      			  <div class="form-row">
	      			    <label><?php echo($label_contact4); //Select Topic?></label>
	      			     <select name="topic">
		      			  <option value="Request showreels"><?php echo($topicItem_contact1); //Request showreels?></option>
		      			  <option value="Project inquiry"><?php echo($topicItem_contact2); //Project inquiry?></option>
		      			  <option value="Request a director"><?php echo($topicItem_contact3); //Request a director?></option>
		      			  <option value="Job application"><?php echo($topicItem_contact4); //Job application?></option>
		      			  <option value="Others"><?php echo($topicItem_contact5) //Others?></option>
	      			    </select>
	      			  </div>
	      			  <div class="form-row">
	      			  <label><?php echo($label_contact5); //Select Service?></label>
	      			    <select name="contact-service">
		      			  <option value=""><?php echo($ServiceItem_contact1); //DIR4FILMS?></option>
		      			  <option value=""><?php echo($ServiceItem_contact2)//DIR4TV?></option>
		      			  <option value=""><?php echo($ServiceItem_contact3) //4BY4?></option>
		      			  <option value=""><?php echo($ServiceItem_contact4)//Not specific?></option>
	      			    </select>
	      			  </div>
	      			</fieldset>
	      			<fieldset class="form-right">
	      			  <div class="form-row">
	      			    <label><?php echo($label_contact6); //Message?></label>
	      			    <textarea row="6" name="message" style="width:280px" id="message"></textarea>
	      			  </div>
	      			  <input type="submit" id="contact-submit" value="<?php echo($send); //Send?>"/><div id="success"></div>
	      			</fieldset>
	      		</form>
	      	
	       </div>
		
	       <button class="btn-toggle-form">
		       <div class="btn-toggle-label"></div>
		       <div class="btn-toggle-box"><span class="icon icon-arrow-right"></span></div>
	       </button>
	       
	       
        </div>
    	<div class="column-right page-content page-content-contact">
	    	<div class="map-wrapper" style="display:none;">
<!-- 	    	<img src="<?php bloginfo('template_url');?>/img/map.png" /> -->
	    	</div>
	    	
	    	
    	</div>
    	
    	
      </div>
 </div>
<?php get_footer();?>
<script>
jQuery(document).ready(function(){

		jQuery('#contact-submit').click(function(){
			//alert("<?php echo get_template_directory_uri(); ?>/sendmail.php");

			jQuery.post("<?php echo get_template_directory_uri(); ?>/sendmail.php", jQuery("#contactform").serialize(),  function(response) {
				//alert(response);
				jQuery('#success').html(response);
				if(response == '<h6>Thank you for you enquiry. We will be in touch shortly.</h6>'){
					jQuery("#contactform")[0].reset();
				}
				});
			return false;
		});
	});
	</script>

<!--
<script type="text/javascript"
			      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQWrq5ttzv0uAzkYV8Hp3G3JIgZAFmlIQ&sensor=false"></script>
<script type="text/javascript">

var marker = null;
var map = null;
var geocoder;


function gMap_initialize() {
	geocoder = new google.maps.Geocoder();

	var mapOptions = {
		//center: new google.maps.LatLng(13.754392,100.49442),
		zoom: 12,
		navigationControl: true,
		streetViewControl : false,

		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	map = new google.maps.Map(document.getElementById("map_canvas"),
		mapOptions);
	
}

gMap_initialize();

</script>-->