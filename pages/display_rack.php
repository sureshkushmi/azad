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
        <img src="assets/images/pages/display_rack.jpg" alt="Display Rack" title="Display Rack" class="img-fluid">
        </div>
        <div class="portfolio-info" style="box-shadow: none;">
<h2><font size="5">Display Rack</font></h2>

<p>A display rack is a type of shelving or fixture specifically designed to showcase products or items in a retail or exhibition setting. It's meant to attract attention to the displayed items and enhance their presentation. Here's a description highlighting its key features:

Description of a Display Rack:

1. Purpose-built Design: Display racks are meticulously crafted with the intention of highlighting merchandise effectively. They come in various shapes, sizes, and styles tailored to specific product types and display environments.

2. Versatile Construction: These racks are often modular, allowing for customization and flexibility in arrangement. They may feature adjustable shelves, hooks, or other attachments to accommodate different product sizes and shapes.

3. Eye-catching Appearance: Display racks are designed to be visually appealing, drawing the attention of potential customers. They may incorporate elements such as sleek metal finishes, vibrant colors, or elegant wood accents to complement the displayed items.

4. Strategic Placement: Typically, display racks are strategically positioned within a retail space to maximize visibility and accessibility. They may be placed near entrances, aisles, or other high-traffic areas to capture the attention of passing customers.

5. Enhanced Product Visibility: The layout and design of display racks aim to optimize product visibility, ensuring that items are prominently showcased to potential buyers. Clear signage, proper lighting, and unobstructed display angles contribute to this visibility.

6. Organization and Accessibility: Display racks are designed to facilitate easy browsing and selection for customers. Products are arranged in an organized manner, making it convenient for shoppers to locate and inspect items of interest.</p>
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
