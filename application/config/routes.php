<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['default_controller'] = '';

// Admin section
$route['admin/login']  = 'admin_c/login';
$route['admin/forgot_password']= 'admin_c/forgot_password';
$route['admin/ngos']= 'admin_c/ngos';
$route['admin/ngos/edit/(:num)']= 'admin_c/edit_ngo/$1';

$route['admin/engineers'] = 'admin_c/engineers';
$route['admin/engineers/edit/(:num)'] = 'admin_c/edit_engineer/$1';

$route['admin/questions'] = 'admin_c/questions';
$route['admin/questions/edit/(:num)'] = 'admin_c/edit_question/$1';

$route['admin/answers'] = 'admin_c/answers';
$route['admin/answers/edit/(:num)'] = 'admin_c/edit_answer/$1';

$route['admin/comments'] = 'admin_c/comments';
$route['admin/comments/edit/(:num)'] = 'admin_c/edit_comment/$1';

$route['admin/engineer-signups'] = 'admin_c/engineer_signups';
$route['admin/ngo-signups'] = 'admin_c/ngo_signups';
