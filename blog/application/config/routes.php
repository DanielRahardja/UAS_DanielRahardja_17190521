<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//Admin
$route['login_admin'] = 'AdminController/login';
$route['protokollogin_admin']= 'AdminController/protokollogin_admin';
$route['admin/(:any)'] = 'AdminController/halamanadmin/$1';

//Penulis
$route['penulis/index'] = 'AdminController/halamanpenulis';
//Guest


//Logout
$route['logout']= 'AdminController/logout';

$route['default_controller'] = 'GuestController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
