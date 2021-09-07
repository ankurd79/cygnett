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
$route['default_controller'] = 'site';
$route['404_override'] = 'errors/error404';
$route['translate_uri_dashes'] = FALSE;

$route['admin-login'] = 'admin/login/login';
$route['logout'] = 'admin/admin/exit';
$route['dashboard'] = 'admin/dashboard/dashboard';

/**********admin screen routes***********************/
$route['manage-brands/add']['GET'] = 'admin/brands/brandmgmt/index';
$route['manage-brands/edit/(:any)']['GET']='admin/brands/brandmgmt/edit/$1';

$route['manage-restaurants/add']['GET'] = 'admin/restaurants/restaurantmgmt/index';
$route['manage-restaurants/edit/(:any)']['GET']='admin/restaurants/restaurantmgmt/edit/$1';


$route['manage-restaurants/list']['GET']='admin/restaurants/restaurantmgmt/list';


$route['manage-locations/add']['GET'] = 'admin/locations/locationmgmt/index';
$route['manage-locations/list']['GET']='admin/locations/locationmgmt/list';
$route['manage-locations/edit/(:any)']['GET']='admin/locations/locationmgmt/edit/$1';


$route['manage-offers/add']['GET'] = 'admin/offers/offermgmt/index';
$route['manage-offers/list']['GET']='admin/offers/offermgmt/list';
$route['manage-offers/edit/(:any)']['GET']='admin/offers/offermgmt/edit/$1';


$route['manage-departments/add']['GET'] = 'admin/departments/departmentmgmt/index';
$route['manage-departments/list']['GET']='admin/departments/departmentmgmt/list';
$route['manage-departments/edit/(:any)']['GET']='admin/departments/departmentmgmt/edit/$1';


$route['manage-designations/add']['GET'] = 'admin/designations/designationmgmt/index';
$route['manage-designations/list']['GET']='admin/designations/designationmgmt/list';
$route['manage-designations/edit/(:any)']['GET']='admin/designations/designationmgmt/edit/$1';


$route['manage-team-members/add']['GET'] = 'admin/teams/teammgmt/index';
$route['manage-team-members/list']['GET']='admin/teams/teammgmt/list';
$route['manage-team-members/edit/(:any)']['GET']='admin/teams/teammgmt/edit/$1';


$route['manage-hotel-navigations/add']['GET'] = 'admin/navigations/hotelnavmgmt/index';
$route['manage-hotel-navigations/list']['GET']='admin/navigations/hotelnavmgmt/list';
$route['manage-hotel-navigations/edit/(:any)']['GET']='admin/navigations/hotelnavmgmt/edit/$1';


$route['manage-hotel-categories/add']['GET'] = 'admin/hotels/hotelcatmgmt/index';
$route['manage-hotel-categories/list']['GET']='admin/hotels/hotelcatmgmt/list';
$route['manage-hotel-categories/edit/(:any)']['GET']='admin/hotels/hotelcatmgmt/edit/$1';


$route['manage-hotel-facilities/add']['GET'] = 'admin/hotels/hotelfacimgmt/index';
$route['manage-hotel-facilities/list']['GET']='admin/hotels/hotelfacimgmt/list';
$route['manage-hotel-facilities/edit']['GET']='admin/hotels/hotelfacimgmt/edit';

$route['manage-room-amenities/add']['GET'] = 'admin/rooms/roomamenitymgmt/index';
$route['manage-room-amenities/list']['GET'] = 'admin/rooms/roomamenitymgmt/list';

$route['manage-meeting-events/add']['GET'] = 'admin/meetingevents/meetingevents/index';
$route['manage-meeting-events/list']['GET']='admin/meetingevents/meetingevents/list';
$route['manage-meeting-events/edit/(:any)']['GET']='admin/meetingevents/meetingevents/edit/$1';

$route['manage-site-navigations/add']['GET'] = 'admin/navigations/sitenavmgmt/index';
$route['manage-site-navigations/list']['GET']='admin/navigations/sitenavmgmt/list';
$route['manage-site-navigations/edit/(:any)']['GET']='admin/navigations/sitenavmgmt/edit/$1';


$route['manage-cuisines/add']['GET'] = 'admin/cuisines/cuisinemgmt/index';
$route['manage-cuisines/list']['GET']='admin/cuisines/cuisinemgmt/list';
$route['manage-cuisines/edit/(:any)']['GET']='admin/cuisines/cuisinemgmt/edit/$1';


$route['manage-bed-types/add']['GET'] = 'admin/bedtypes/bedtypemgmt/index';
$route['manage-bed-types/list']['GET']='admin/bedtypes/bedtypemgmt/list';
$route['manage-bed-types/edit/(:any)']['GET']='admin/bedtypes/bedtypemgmt/edit/$1';

$route['manage-unit/add']['GET'] = 'admin/hotels/unitmgmt/index';
$route['manage-unit/list']['GET']='admin/hotels/unitmgmt/list';
$route['manage-unit/edit/(:any)']['GET']='admin/hotels/unitmgmt/edit/$1';
//$route['manage-unit-list']['GET']='admin/hotels/unitmgmt/edit/$1


$route['manage-unit-room/list/(:any)']['GET']='admin/hotels/unitmgmt/unitroomlist';
$route['manage-unit-room/add/(:any)']['GET']='admin/hotels/unitmgmt/unitroomadd';
$route['manage-unit-room/edit/(:any)/(:any)']['GET']='admin/hotels/unitmgmt/unitroomedit';


$route['manage-unit-banquet/list/(:any)']['GET']='admin/hotels/unitmgmt/unitbanquetlist';
$route['manage-unit-banquet/add/(:any)']['GET']='admin/hotels/unitmgmt/unitbanquetadd';
$route['manage-unit-banquet/edit/(:any)/(:any)']['GET']='admin/hotels/unitmgmt/unitbanquetedit';


$route['manage-unit-restaurant/list/(:any)']['GET']='admin/hotels/unitmgmt/unitrestaurantlist';
$route['manage-unit-restaurant/add/(:any)']['GET']='admin/hotels/unitmgmt/unitrestaurantadd';
$route['manage-unit-restaurant/edit/(:any)/(:any)']['GET']='admin/hotels/unitmgmt/unitrestaurantedit';

$route['manage-unit-gallery/list/(:any)']['GET']='admin/hotels/unitmgmt/unitgallerylist';
$route['manage-unit-gallery/add/(:any)']['GET']='admin/hotels/unitmgmt/unitgalleryadd';


$route['manage-unit-meta-information/list/(:any)']['GET']='admin/hotels/unitmgmt/unitmetainformation';
$route['manage-unit-page-banners/list/(:any)']['GET']='admin/hotels/unitmgmt/unitpagebanners';

$route['manage-unit-offers/list/(:any)']['GET']='admin/hotels/unitmgmt/unitoffers';
$route['manage-unit-offers/add/(:any)']['GET']='admin/hotels/unitmgmt/unitofferadd';
$route['manage-unit-offers/edit/(:any)/(:any)']['GET']='admin/hotels/unitmgmt/unitofferedit';

$route['manage-home-page-banners/add']['GET'] = 'admin/global/globalmgmt/index';

$route['manage-media-news/add']['GET'] = 'admin/media/mediamgmt/index';
$route['manage-media-news/edit/(:any)']['GET']='admin/media/mediamgmt/edit';

$route['manage-media-news/list']['GET'] = 'admin/media/mediamgmt/list';


$route['manage-cygnetture-dishes/add']='admin/cygnetture/dishmgmt/index';
$route['manage-cygnetture-dishes/edit/(:any)']['GET']='admin/cygnetture/dishmgmt/edit';
$route['manage-cygnetture-dishes/list']['GET'] = 'admin/cygnetture/dishmgmt/list';

$route['manage-brand-category/add']['GET'] = 'admin/brands/brandcategory/index';
$route['manage-brand-category/edit/(:any)']['GET']='admin/brands/brandcategory/edit/$1';
$route['manage-brand-category/list']['GET']='admin/brands/brandcategory/list';

$route['manage-regions/add']['GET'] = 'admin/regions/regionmgmt/index';
$route['manage-regions/edit/(:any)']['GET'] = 'admin/regions/regionmgmt/edit';
$route['manage-regions/list']['GET']='admin/regions/regionmgmt/list';

$route['manage-team-members/regionwise']['GET']='admin/teams/teammgmt/regionteamsetting';

$route['manage-job-posts/add']['GET'] = 'admin/jobposts/jobpost/index';
$route['manage-job-posts/edit/(:any)']['GET'] = 'admin/jobposts/jobpost/edit';
$route['manage-job-posts/list']['GET']='admin/jobposts/jobpost/list';
$route['view-job-applications/list/(:any)']['GET']='admin/jobposts/jobpost/applicationlist';

$route['manage-brands/homepage']['GET']='admin/brands/brandmgmt/homepage';

$route['manage-room-category/add']['GET'] = 'admin/rooms/roommgmt/index';
$route['manage-room-category/edit/(:any)']['GET']='admin/rooms/roommgmt/edit/$1';
$route['manage-room-types/list']['GET']='admin/rooms/roommgmt/list';

/**********admin screen routes***********************/



/********site routes*************/

$route['offers.php']['GET'] = 'site/siteoffers';
$route['brands.php']['GET'] = 'site/brands';
$route['offers/details/(:any)/(:any)']['GET'] = 'site/siteofferdetails';
$route['individual-offer/(:any)/(:any)/(:any)/(:any)/(:any)/(:any)']='unit/hotelofferdetails';
$route['brands/details/(:any)/(:any)']['GET'] = 'site/sitebranddetails';
$route['dining/details/(:any)/(:any)']['GET'] = 'site/sitediningdetails';
//$route['location/details/(:any)/(:any)/(:any)']['GET'] = 'site/sitelocationdetails/';
//$route['(:any)']['GET'] = 'site/sitelocationdetails/';
$route['media-news.php']['GET'] = 'site/medialanding';
$route['our-locations']['GET'] = 'site/locationlanding';
$route['overview.php']['GET'] = 'sitenav/overview';
$route['aboutus.php']['GET'] = 'sitenav/aboutcygnett';
$route['our-heritage.php']['GET'] = 'sitenav/heritage';
$route['team.php']['GET'] = 'sitenav/leadership';
$route['signature.php']['GET'] = 'sitenav/signature';
$route['vision-mission.php']['GET'] = 'sitenav/visionmission';
$route['core-values.php']['GET'] = 'sitenav/corevalues';
$route['safety.php']['GET'] = 'sitenav/safety';
$route['careers-at-cygnett']['GET'] = 'sitenav/career';
$route['our-hotels']['GET'] = 'sitenav/hotellist';
$route['covid-19.php']['GET'] = 'sitenav/covid';
$route['new-and-upcoming-hotels']['GET']='sitenav/newupcominghotels';
$route['ad-and-cookie-policy']['GET']='sitenav/adcookiepolicy';
$route['digital-copyright-act']['GET']='sitenav/digitalcopyright';
$route['legal-notice']['GET']='sitenav/legalnotice';
$route['privacy-policy']['GET']='sitenav/privacypolicy';
$route['terms-conditions.php']['GET']='sitenav/terms';
$route['site-usage-agreement']['GET']='sitenav/siteusage';
$route['faqs']['GET']='sitenav/faq';
$route['corporate-enquiry.php']['GET']='sitenav/corpenquiry';
$route['guest-review.php']['GET']='sitenav/guestreview';
$route['contact-us.php']['GET']='sitenav/contactus';
$route['sitemap']['GET']='sitenav/sitemap';
$route['our-technologies']['GET']='sitenav/ourtech';

#business dev

$route['business-development']['GET'] = 'businessdev/index';
$route['why-bond-with-cygnett']['GET'] = 'businessdev/bond';
$route['our-brands']['GET'] = 'businessdev/brands';
$route['business-model']['GET'] = 'businessdev/businessmodel';
$route['our-team']['GET'] = 'businessdev/team';
$route['projects-and-tech-support']['GET'] = 'businessdev/projecttech';

$route['business-development-team/(:any)']['GET'] = 'businessdev/regionteam';
$route['team/(:any)']['GET'] = 'sitenav/teamdetails';

/********site routes*************/

/******unit specific routes****/

//$route['unit-(:any)/details/(:any)/(:any)/(:any)/(:any)/(:any)']['GET'] = 'unit/pages';


//$route['(:any)/(:any)']['GET'] = 'unit/pages';


/******unit specific routes****/

//$route['(:any)']['GET'] = 'site/sitelocationdetails/';




/**********API routes***********************/

$route['add-brands']['POST']='api/brands/brand/index_post';
$route['update-brands']['POST']='api/brands/brand/update';


$route['fetch-brands/(:num)']['GET']='api/brands/brand/$1';
$route['fetch-brands']['GET']='api/brands/brand';


$route['add-restaurants']['POST']='api/restaurants/restaurant/add';
$route['update-restaurants']['POST']='api/restaurants/restaurant/update';


$route['add-locations']['POST']='api/locations/location/add';

$route['update-locations']['POST']='api/locations/location/update';

$route['add-offers']['POST']='api/offers/offer/add';
$route['update-offers']['POST']='api/offers/offer/update';


$route['add-departments']['POST']='api/departments/department/add';
$route['update-departments']['POST']='api/departments/department/update';


$route['add-designations']['POST']='api/designations/designation/add';
$route['update-designations']['POST']='api/designations/designation/update';


$route['add-team-members']['POST']='api/teams/team/add';
$route['update-team-members']['POST']='api/teams/team/update';


$route['add-hotel-navigation']['POST']='api/navigations/hotelnav/add';
$route['update-hotel-navigation']['POST']='api/navigations/hotelnav/update';

$route['add-hotel-category']['POST']='api/hotels/hotelcat/add';
$route['update-hotel-category']['POST']='api/hotels/hotelcat/update';


$route['add-hotel-facility']['POST']='api/hotels/hotelfaci/add';
$route['update-hotel-facility']['POST']='api/hotels/hotelfaci/update';


$route['add-room-amenity']['POST']='api/rooms/roomamenity/add';
$route['update-room-amenity']['POST']='api/rooms/roomamenity/update';


$route['add-meeting-event-unit']['POST']='api/meetingevents/meetingevents/add';
$route['update-meeting-event-unit']['POST']='api/meetingevents/meetingevents/update';


$route['add-site-navigation']['POST']='api/navigations/sitenav/add';
$route['update-site-navigation']['POST']='api/navigations/sitenav/update';

$route['add-cuisines']['POST']='api/cuisines/cuisine/add';
$route['update-cuisines']['POST']='api/cuisines/cuisine/update';

$route['add-bed-types']['POST']='api/bedtypes/bedtype/add';
$route['update-bed-types']['POST']='api/bedtypes/bedtype/update';

$route['add-units']['POST']='api/units/unit/add';
$route['update-units']['POST']='api/units/unit/update';


$route['add-rooms']['POST']='api/units/unit/rooms';
$route['update-room']['POST']='api/units/unit/roomupdate';

$route['add-banquets']['POST']='api/units/unit/banquets';
$route['update-banquets']['POST']='api/units/unit/banquetupdate';

$route['add-unit-restaurants']['POST']='api/units/unit/restaurants';
$route['update-unit-restaurants']['POST']='api/units/unit/restaurantupdate';


$route['add-photos']['POST']='api/units/unit/photos';
$route['update-photos']['POST']='api/units/unit/photoupdate';

$route['add-home-banners']['POST']='api/global/globals/add';


$route['add-unit-offers']['POST']='api/units/unit/offer';
$route['update-unit-offer']['POST']='api/units/unit/offerupdate';

$route['add-media-news']['POST']='api/media/media/newsadd';
$route['update-media-news']['POST']='api/media/media/newsupdate';

$route['add-cynetture-dish']['POST']='api/cuisines/cygnetture/add';
$route['update-cynetture-dish']['POST']='api/cuisines/cygnetture/update';

$route['add-brand-category']['POST']='api/brands/brandcategory/add';
$route['update-brand-category']['POST']='api/brands/brandcategory/update';

$route['add-regions']['POST']='api/regions/region/add';
$route['update-regions']['POST']='api/regions/region/update';

//$route['add-photos']['POST']='api/units/unit/photos';

$route['add-job']['POST']='api/jobs/job/add';
$route['update-job']['POST']='api/jobs/job/update';

//$route['add-photos']['POST']='api/units/unit/photos';


$route['send-job-application']['POST']='api/jobs/job/sendapp';
$route['send-pillar-request']['POST']='api/brands/brand/sendbprequest';
$route['send-dining-query']['POST']='api/units/unit/senddiningquery';

$route['send-corporate-enquiry']['POST']='api/sitenav/sitenav/sendcorpquery';
$route['send-guest-review']['POST']='api/sitenav/sitenav/sendguestreview';
$route['send-contact-form-mail']['POST']='api/sitenav/sitenav/sendcontactfrmmail';

$route['add-room-types']['POST']='api/rooms/rooms/add';
$route['update-room-types']['POST']='api/rooms/rooms/update';


/**********API routes***********************/

$route['(:any)/(:any)']['GET'] = 'unit/pages';


/******unit specific routes****/

$route['(:any)']['GET'] = 'site/sitelocationdetails/';