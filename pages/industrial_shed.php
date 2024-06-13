<?php 
//include_once('routes.php');
include_once('header.php');
include_once('slide_out_form.php');
?>
<main id="main">
<section class="cate portfolio-details">
<div class="container ">
<div class="row">
    <div class="col-md-8">
    <div class="cate-left-sidebar">
        <img src="assets/images/pages/industrialshade.jpg" alt="Industrial Shed" title="Industrial Shed" class="img-fluid">
        </div>
        <div class="portfolio-info" style="box-shadow: none;">
<h2><font size="5">Industrial Shed</font></h2>

<p>An industrial shed is a large, typically prefabricated structure designed to provide shelter and workspace for industrial activities. These structures are commonly used in various industries such as manufacturing, warehousing, logistics, agriculture, and construction. Here's a description highlighting key features and characteristics of industrial sheds:

1. Structure and Construction:

    Industrial sheds are typically large, open-span buildings with a high ceiling clearance to accommodate machinery, equipment, and storage needs.
    They are constructed using sturdy materials such as steel, concrete, or a combination of both, ensuring durability and structural integrity.
    The construction may involve prefabricated components that are assembled on-site, allowing for faster installation and cost-effectiveness.

2. Purpose and Functionality:

    Industrial sheds serve multiple purposes, including manufacturing, assembly, storage, distribution, and processing of goods or materials.
    They provide a controlled environment for industrial activities, protecting workers, equipment, and inventory from adverse weather conditions and external elements.</p>
</div>
<!--<a href="#" onClick="productEnquiry('Slotted Angle Rack');" class="btn btn-warning mt-3">Enquiry Now</a>-->
        
    </div>
    <div class="col-md-4 sidebar-enquiry">
      <div class="col-md-12 php-email-form positio-sticky">
          <div class="bg-warning p-2"><span>Enquiry Form</span></div>
          
<form role="form" method="post" action="#" name="popup-enq" novalidate="novalidate">
<input type="hidden" name="current_url" id="current_url" value="#">
<input type="hidden" name="source" class="source" value="Slotted Angle Rack">  
<div class="row">
<div class=" form-group mt-2">
<input type="text" name="vb_name" class="form-control" id="vb_name" placeholder="Your Name">
</div>
<div class=" form-group  mt-2">
<input type="email" class="form-control" name="vb_email" id="vb_email" placeholder="Your Email">
</div>
</div>

<div class="row">
<div class=" form-group  mt-2">
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

<input type="hidden" name="time" value="2024-06-11 11:54:17">

<div class=""><button type="submit" name="submit" class="btn btn-warning mt-3">Send Message</button></div>

</form>
</div>
        
    </div>
    
</div>
</div>
</section> 
</main>
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
<form method="post" action="#" name="popup-enq3" novalidate="novalidate">
<input type="hidden" name="current_url" id="current_url" value="#">
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
<?php 
include_once('footer.php');
?>
