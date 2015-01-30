<?php 
$slug = 'dir4-our-clients';

$clients = array();

$clients[] = (object) array('title' => 'BEIERSDORF THAILAND');
$clients[] = (object) array('title' => 'Nivea AND Eucerin');
$clients[] = (object) array('title' => "Garner L'oreal Thailand");
$clients[] = (object) array('title' => "Garner L'oreal Malaysia");
$clients[] = (object) array('title' => "Garner L'oreal Indonesia");
$clients[] = (object) array('title' => 'Tripetch Isuzu');
$clients[] = (object) array('title' => 'Samsung Thailand');
$clients[] = (object) array('title' => 'Watson');
$clients[] = (object) array('title' => 'Osotspa');
$clients[] = (object) array('title' => '12 Plus');
$clients[] = (object) array('title' => 'True Vision');
$clients[] = (object) array('title' => 'Teacher TV');
$clients[] = (object) array('title' => 'Honeymoon Travel');
$clients[] = (object) array('title' => 'J&C');
$clients[] = (object) array('title' => 'Ministry of Transportation');
$clients[] = (object) array('title' => 'Airport rail link');
$clients[] = (object) array('title' => 'Ministry of science and technology');
$clients[] = (object) array('title' => 'Morseng Amazing Herb');
$clients[] = (object) array('title' => 'Canon');

include('header.php'); ?>
    <div class="content-main-panel" id="content-our-clients">
      <div class="row">
        <div class="column-left">
        	 <ul>
                  <li class="subnav-header">
                    <span class="red">HAPPY</span><br/>
                    <span class="palegold">CLIENTS</span><br/>
                    <span class="white">WE HAVE WORKED FOR</span>
                  </li>
                  <li class="subnav-item"><a href="#">DIR4 FILMS</a></li>
                  <li class="subnav-item"><a href="#">DIR4 TV</a></li>
                  <li class="subnav-item"><a href="#">4BY4</a></li>
                  <li class="subnav-item"><a href="#">Production Support</a></li>
           </ul>
        </div>
    	  <div class="column-right">
    	  	
          <div class="client-list-wrapper">
            <ul class="text-list client-list">
              <?php foreach ($clients as $client): ?>
              <li><a href="page-dir4-our-clients-detail.php"><?php echo $client->title; ?></a></li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>

      </div>

    </div>
    

<?php include('footer.php'); ?>