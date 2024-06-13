<?php
// Function to check if the request is for a static asset
function is_static_asset($path) {
    $extensions = ['css', 'js', 'jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'woff', 'woff2', 'ttf', 'eot', 'ico', 'map'];
    $ext = pathinfo($path, PATHINFO_EXTENSION);
    return in_array($ext, $extensions);
}

// Read the 'url' query parameter
$requested_url = isset($_GET['url']) ? $_GET['url'] : '';

// Remove trailing slash
$request_path = rtrim($requested_url, '/');

// Log the requested URL and normalized request path
//error_log("Request Path: $request_path", 3, "C:/xampp/htdocs/azadn/error_log.log");

// If the request is for a static asset, do not route
if (is_static_asset($request_path)) {
    return false;
}

// Route handling
switch ($request_path) {
    case '':
        include_once('index.php'); // Separate content from routing logic
        break;
    case 'about-us':
        include_once('about_us.php');
        break;
    case 'sloted_angle_rack':
        include_once('pages/sloted_angle_rack.php');
        break;
    case 'almirah':
        include_once('pages/almirah.php');
        break;    
    case 'office_almirah':
        include_once('pages/office_almirah.php');
        break;
        case 'locker_almirah':
        include_once('pages/locker_almirah.php');
        break; 
    case 'home_almirah':
        include_once('pages/home_almirah.php');
         break;
        case 'vagetable_rack':
            include_once('pages/vegetable_rack.php');
            break;
        case 'industrial_rack':
            include_once('pages/industrial_rack.php');
            break;
        case 'food_grade_steel_rack':
            include_once('pages/food_grade_still_rack.php');
            break;  
        case 'display_rack':
            include_once('pages/display_rack.php');
            break;
        case 'super_market_rack':
            include_once('pages/super_market_rack.php');
            break;    
        case 'industrial_shed':
            include_once('pages/industrial_shed.php');
            break;
        case 'material_handling_equipment':
            include_once('pages/material_handling_equipment.php');
            break;    
        case 'photo_gallery':
            include_once('pages/photo_gallery.php');
        case 'contact_us':
            include_once('pages/contact_us.php');
            break;                                         
    default:
        include_once('404.php');
        break;
}
?>
