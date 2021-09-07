<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code


/***********DB Table**********************************/


define('team','cyg_team');
define('admin','cyg_admin');
define('brands','cyg_brands');
define('banners','cyg_brand_banners');
define('key_pointers','cyg_brand_key_pointers');

define('restaurants','cyg_restaurants');
define('res_images','cyg_restaurants_images');
define('state','cyg_states');
define('city','cyg_cities');

define('location','cyg_location');
define('location_images','cyg_location_images');
define('location_visit','cyg_places_to_visit');

define('offers','cyg_offers');
define('offer_banners','cyg_offers_banners');

define('department','cyg_departments');


define('designation','cyg_designation');

define('highlights','cyg_team_member_highlights');


define('hotel_nav_category','cyg_page_category');
define('hotel_category','cyg_hotel_category');

define('hotel_facilities','cyg_facilities');

define('room_amenities','cyg_room_amenities');

define('meetingevents','cyg_meetingevents');

define('site_navigation','cyg_navigation');

define('nav_roll_over','cyg_navigation_roll_over_details');

define('cuisines','cyg_cuisines');

define('bed_type','cyg_bed_types');

define('units','cyg_hotels');

define('hotel_mails','cyg_hotel_mails');

define('hotel_phones','cyg_hotel_phones');
define('hotel_social_media','cyg_hotel_social');

define('hotel_nearby','cyg_hotel_nearby');

define('hotel_facility','cyg_hotel_facilities');

define('other_policies','cyg_hotel_other_policies');

define('rooms','cyg_hotel_rooms');

define('room_images','cyg_hotel_room_images');

define('room_inclusions','cyg_hotel_room_inclusions');

define('hotel_restaurant','cyg_hotel_restaurant');

define('hotel_meeting_events','cyg_hotel_meeting_events');

define('hotel_meeting_events_images','cyg_hotel_meeting_events_images');

define('hotel_restaurant_images','cyg_hotel_restaurant_images');

define('hotel_restaurant_contact','cyg_hotel_restaurant_contact');

define('hotel_gallery','cyg_hotels_gallery');

define('hotel_navigation_meta','cyg_hotel_page_category_meta');

define('hotel_page_category_banners','cyg_hotel_page_category_banners');

define('home_banners','cyg_home_banners');

define('hotel_offers','cyg_hotel_offers');

define('unit_offers_banners','cyg_hotel_offer_banner_images');
define('country','cyg_country');

define('media','cyg_media_news');

define('signature_dishes','cyg_signature_dishes');

define('carousel_imaages','brand_carousel_imaages');

define('brandcat','brand_category');

define('regions','cyg_regions');

define('rtms','cyg_region_team_member_sequence');

define('jobposts','cyg_job_posts');

define('nav_banners','cyg_navigation_banners');

define('guest_review','cyg_guests_review');

define('unit_guest_review','cyg_unit_guest_review');

define('room_type','cyg_room_types');

define('dining_enquiry','cyg_hotel_restaurant_enquiry');

/***********DB Table**********************************/


/*************folders********************/

define('adm_assets','admin_assets');
define('folder_restaurant', 'restaurants');
define('folder_brand', 'brands');
define('folder_location', 'locations');

define('folder_offers', 'offers');

define('folder_team', 'teams');
define('folder_room_amenities','room_amenities');
define('folder_nav_ro','nav_rollover');
define('folder_units','units');
define('folder_room_images','room_images');
define('folder_banquet_images','banquet_images');
define('folder_restaurant_images', 'restaurant_images');
define('folder_gallery_photos','gallery_images');
define('folder_unit_page_images','unit_page_images');
define('folder_unit_offers', 'unit_offers');
define('folder_media', 'media');
define('folder_global', 'global');
define('folder_front', 'front');
define('folder_cygnetture', 'cygnetture');

define('folder_regions', 'regions');

define('folder_jobs', 'jobs');

define('folder_nav_banners', 'nav_banners');

define('upath',$_SERVER['DOCUMENT_ROOT'].'');

/*************folders********************/

/****email config********/



define('brand_pillar_mail', 's.sarkar@cygnetthotels.com');
define('central_reservation_mail', 'centralreservations@cygnetthotels.com');
define('corp_enquiry_mail', 'development@cygnetthotels.com');
define('guest_review_mail', 'development@cygnetthotels.com');
define('contact_enquiry_mail', 'centralreservations@cygnetthotels.com');


/****email config********/