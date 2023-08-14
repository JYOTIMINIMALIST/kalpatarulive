	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'website';

$req_uri = $_SERVER['REQUEST_URI'];     // $req_uri = /myproject/backend
$req_uri = explode('/', $req_uri);
// print_r($req_uri);die;
$uri = "";
if(isset($req_uri[1])){
    $uri = $req_uri[1];                 // $req_uri[2] = backend
}
if(isset($req_uri[2]) && ($uri != "klconfig" && $uri != "common")){
    $uri = $req_uri[2];  
}
if(in_array("klconfig", $req_uri)){
    $uri = "klconfig";
}
if($uri == 'klconfig' || $uri == 'common'){
	$route['404_override'] = ''; 
	$route['klconfig'] = 'common';
	$route['klconfig/dashboard'] = 'klconfig/dashboard';
	$route['klconfig/sort-properties'] = 'klconfig/sortProperties';
	$route['klconfig/add-properties'] = 'klconfig/addProperties';
	$route['klconfig/edit-properties'] = 'klconfig/editProperties';
}else{
	//Website
	//$route['projects/(:any)/(:any)/(:num)'] = 'website/projectInner';
	//$route['projects/(:any)/(:any)'] = 'website/projectInner';
	$route['projects/(:any)'] = 'website/listingPage';
	$route['website/salesforce'] = 'website/salesforce';
	$route['website/getCities'] = 'website/getCities';
	$route['website/getLocations'] = 'website/getLocations';
	$route['website/getDataOnScroll'] = 'website/getDataOnScroll';
	$route['projects'] = 'website/projects';
	$route['search-result'] = 'website/searchResult';
	
	 $route['project-search'] = 'website/searchResult';
	
	$route['company-profile'] = 'website/companyProfile';
	// $route['50-years-of-kalpataru'] = 'website/Years50';
	$route['50-plus-years-of-our-legacy'] = 'website/Years50';
	$route['awards'] = 'website/awards';
	$route['careers'] = 'website/careers';
	//$route['completed-projects'] = 'website/completedProject';
	$route['completed-projects'] = 'website/completedNewProject';
	$route['contact-us'] = 'website/contact';
	$route['gallery'] = 'website/gallery';
	$route['csr'] = 'website/csr';
	$route['group-company'] = 'website/groupCompany';
	$route['leadership-team'] = 'website/leadershipTeam';
	$route['press'] = 'website/press';
	$route['sustainability'] = 'website/sustainability';
	$route['privacy-policy'] = 'website/privacyPolicy';
	$route['refund-policy'] = 'website/refundPolicy';
	$route['thank-you'] = 'website/thank_you';
	$route['website/savegetintouch'] = 'website/savegetintouch';
	$route['kalpataru-nri'] = 'website/kalpatarunri';
	$route['(:any)-thank-you'] = 'website/thank_you';
	$route['website/load_press_data'] = 'website/load_press_data';
	$route['404_override'] = 'My404';
	$route['translate_uri_dashes'] = FALSE;

	//New routes for listing pages - Dynamic Footer
	$route['(:any)'] = 'website/projects_listing/$1';
	$route['(:any)/(:any)'] = 'website/projects_listing/$1/$2';
	
	//$route['(:any)'] = 'project/index/$1/$2';
	
	// search bar route
	
	

	
}