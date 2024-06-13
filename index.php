<?php 
// Define the base URL
$base_url = __DIR__ . '/';
include_once($base_url .'routes.php');
 ?>
<?php 
include_once($base_url .'header.php');
include_once($base_url .'slide_out_form.php');
?>
<?php include_once($base_url .'hero_slider.php'); ?>
 <main id="main">

<?php include_once($base_url .'about.php'); ?>
<?php include_once($base_url .'call_to_auction.php'); ?>
<?php include_once($base_url .'services.php'); ?>
<?php include_once($base_url .'featured_services.php'); ?>
<?php include_once($base_url .'articles.php'); ?>
</main>
<!-- The Modal -->
<div class="modal fade" id="enquire">
<div class="modal-dialog" style="max-width: 580px;">
<div class="modal-content">

<!-- Modal Header -->
<div class="modal-header bg-warning" style="color:#fff">
<h4 class="modal-title">Enquire Now</h4>
<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
</div>

<!-- Modal body -->
<div class="modal-body">
<div class="row">

<div class="col-md-12">
<form method="post" action="https://azadmetalengineering.com.np/enquiry-submit.php" name="popup-enq3" novalidate="novalidate">
<input type="hidden" name="current_url" id="current_url" value="https://azadmetalengineering.com.np/index.html">
<input type="hidden" name="source" class="source" value="index">  
<div class="row">
<div class="col form-group mt-2">
<input type="text" name="vb_name" class="form-control" id="vb_name" placeholder="Your Name">
</div>
<div class="col form-group  mt-2">
<input type="email" class="form-control" name="vb_email" id="vb_email" placeholder="Your Email">
</div>
</div>

<div class="row">
<div class="col form-group  mt-2">
<input class="form-control" type="text" name="vb_phone" placeholder="Your Mobile Number*" maxlength="10">
</div>
</div>


<div class="form-group  mt-2">
<textarea class="form-control" rows="5" name="vb_message" placeholder="Your Message*"></textarea>
</div>

<div class="req" style="display: none;">
 <label for="website">Leave blank</label>
 <input type="text" name="website">
</div>


<input type="hidden" name="time" value="2024-06-03 11:43:13">

<div class="pull-left"><button type="submit" name="submit" class="btn btn-warning mt-3">Send Message</button></div>
</form>
</div>

</div>
</div>

</div>
</div>
</div>


<style>
.float {
position: fixed;
width: 50px;
height: 50px;
bottom: 98px;
right: 23px;
background-color: #25d366;
color: #FFF;
border-radius: 50px;
text-align: center;
font-size: 27px;
box-shadow: 2px 2px 3px #999;
z-index: 100;
/* bottom: 88px; */
/* left: 16px; */
/* padding: 0px 11px 4px; */
}

</style>
<?php 
include_once('footer.php');
?>