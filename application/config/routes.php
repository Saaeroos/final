<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['default_controller'] = '';

// Admin section
$route['admin/login']  = 'admin_c/login';
$route['admin/forgot_password']= 'admin_c/forgot_password';
$route['admin/ngos']= 'admin_c/ngos';
