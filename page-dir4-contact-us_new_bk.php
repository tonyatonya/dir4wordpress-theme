<?php get_header(); ?>

<div style="width:100%;height:100%;position:fixed;">
	<iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.th/maps/ms?msid=211364844049942334089.0004ea18cbb7f17eb75c5&amp;msa=0&amp;ie=UTF8&amp;ll=13.780668,100.538264&amp;spn=0,0&amp;t=m&amp;output=embed"></iframe><br><table width="425" cellpadding="0" cellspacing="0" border="0"><tr><td align="left"><small><a href="http://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=dir4%2Bbangkok&ie=UTF8&z=14&t=m&iwloc=addr">View Larger Map</a></small></td><td align="right"><small><a href="http://www.embedgooglemap.com">embed google map</a></small></td></tr></table></div>
<div id="map-foreground" style="position:fixed; width:100%;height:100%; background-color:rgba(0,0,0,1); pointer-events:none;"></div>

 <div class="content-main-panel" id="content-contactus">
      <div class="row">
      	
        <div class="column-left page-summary">
        	<h1 class="page-header">Contact us</h1>
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
				<span class="bold">E.</span> producer@dir4films.com</p>
        	
	        <a href="https://goo.gl/maps/ktaVK" target="_blank" class="btn-googlemap btn-action">Google Map<span class="marker"></span></a><br>
	        <a href="#" class="btn-action">Print Version<span class="print"></span></a><br>
	       <a href="http://www.dir4films.com/files/company_profile.pdf"  target="_blank" class="btn-pdf btn-action">Company Profile (pdf)<span class="download"></span></a>	   
	       
	       
	       <div class="contact-form-panel">
	      		<form class="contact-form clearfix" id="contactform">
	      			<fieldset class="form-left">
	      			  <div class="form-row">
	      			    <label>Name</label>
	      			    <input type="text" name="name" id="name" />
	      			  </div>
	      			  <div class="form-row">
	      			    <label>Email</label>
	      			    <input type="text" name="email" id="email" />
	      			  </div>
	      			  <div class="form-row">
	      			    <label>Phone</label>
	      			    <input type="text" name="phone" />
	      			  </div>
	      			  <div class="form-row">
	      			    <label>Select Topic</label>
	      			     <select name="topic">
		      			  <option value="Request showreels">Request showreels</option>
		      			  <option value="Project inquiry">Project inquiry</option>
		      			  <option value="Request a director">Request a director</option>
		      			  <option value="Job application">Job application</option>
		      			  <option value="Others">Others</option>
	      			    </select>
	      			  </div>
	      			  <div class="form-row">
	      			  <label>Select Service</label>
	      			    <select name="contact-service">
		      			  <option value="">DIR4FILMS</option>
		      			  <option value="">DIR4TV</option>
		      			  <option value="">4BY4</option>
		      			  <option value="">Not specific</option>
	      			    </select>
	      			  </div>
	      			</fieldset>
	      			<fieldset class="form-right">
	      			  <div class="form-row">
	      			    <label>Message</label>
	      			    <textarea row="6" name="message" id="message"></textarea>
	      			  </div>
	      			  <input type="submit" id="contact-submit" value="Send"/><div id="success"></div>
	      			</fieldset>
	      		</form>
	      	
	       </div>
		
	       <button class="btn-toggle-form">
		       <div class="btn-toggle-label"></div>
		       <div class="btn-toggle-box"><span class="icon icon-arrow-right"></span></div>
	       </button>
	       
	       
        </div>
    	<div class="column-right page-content page-content-contact">
	    	<div class="map-wrapper">
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