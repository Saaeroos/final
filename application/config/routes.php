<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['default_controller'] = '';

// Admin section
$route['admin/login']  = 'admin_c/login';
$route['admin/forgot_password']= 'admin_c/forgot_password';
$route['admin/ngos']= 'admin_c/ngos';
$route['admin/ngos/view/(:num)']= 'admin_c/view_ngo/$1';
$route['admin/ngos/delete/(:num)'] = 'admin_c/c_delete_ngo/$1';


$route['admin/engineers'] = 'admin_c/engineers';

$route['admin/engineers/view/(:num)']= 'admin_c/view_engineer/$1';

// make sure there are no spaces in the left and right part
// make sure you send the catched parts as $1, this will be the engineer id later


$route['admin/questions'] = 'admin_c/c_list_of_questions';
$route['admin/questions/edit/(:num)'] = 'admin_c/edit_question/$1';
$route['admin/questions/delete/(:num)'] = 'admin_c/c_delete_question/$1';

$route['admin/answers'] = 'admin_c/answers';
$route['admin/answers/edit/(:num)'] = 'admin_c/edit_answer/$1';

$route['admin/comments'] = 'admin_c/comments';
$route['admin/comments/edit/(:num)'] = 'admin_c/edit_comment/$1';

$route['admin/engineer-signups'] = 'admin_c/engineer_signups';
$route['admin/ngo-signups'] = 'admin_c/ngo_signups';
