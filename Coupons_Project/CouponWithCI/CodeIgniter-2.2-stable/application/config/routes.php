<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

/*
 * routes added for the coupon project
 */
//$route['getCoupon']='/CouponsPages/getCoupon/$1';
$route['couponstable']='couponstable/indexTable';

// ==== CouponsPages Dir ====
$route['CouponsPages/getCoupon/(:any)']='/CouponsPages/getCoupon/$1';
$route['CouponsPages']='CouponsPages';

// ==== Pages Dir =======
//routes for the "Pages" class in the controller (calling to the function view in pages.php)
// the link to the home page will be 
// http://localhost/CodeWithZend/Coupons_Project/CouponWithCI/CodeIgniter-2.2-stable/index.php/home

$route['about'] = '/pages/view/about';
$route['home'] = '/pages/view/home';
//$route['default_controller'] = '/pages/view';



/*
 * The original routes that came with CI 2.2
 */

$route['default_controller'] = "welcome";
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */