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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'landing';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//ENGLISH
$route['contact'] = 'landing/contact';
$route['kad-kahwin'] = 'landing/templates';
$route['preview/(:any)'] = 'preview/display';

$route['login'] = 'authentication';
$route['logout'] = 'authentication/logout';
$route['validate'] = 'authentication/login';
$route['register'] = 'authentication/register';
$route['registration'] = 'authentication/registration';

$route['coupon'] = 'checkout/coupon';
$route['package'] = 'checkout/package';
$route['checkout/(:any)'] = 'checkout/validate';
$route['validation'] = 'checkout/validation';
$route['verifiying'] = 'checkout/payment';
$route['details/(:any)'] = 'checkout/details';
$route['stripe'] = 'checkout/stripe';
$route['error'] = 'checkout/error';
$route['get_token'] = 'checkout/get_token';

$route['guest/(:any)'] = 'guest/guest';
$route['modify/(:any)'] = 'main/modify';
$route['save-invitation'] = 'main/save';

$route['terms'] = 'policy/terms';
$route['privacy'] = 'policy/privacy';

//Invitation
$route['invitation/(:any)'] = 'view/invitation';
$route['comment'] = 'view/comment';
$route['load'] = 'view/load';
$route['rsvp'] = 'view/rsvp';
$route['attend'] = 'view/attend';

//Preview
$route['preview/(:any)'] = 'preview/invitation';
$route['preview-comment'] = 'preview/comment';
$route['preview-load'] = 'preview/load';
$route['preview-rsvp'] = 'preview/rsvp';
$route['preview-attend'] = 'preview/attend';

//ADMIN ROUTE
