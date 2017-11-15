<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//home page
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['default_controller'] = 'main/homepage';
// $route['platform']='main/user_platform';
$route['questions/(:num)']='main/view_question/$1';
$route['questions/(:num)/answer'] = 'main/answer_question/$1';

$route['user/login']='main/loginprocess';
$route['user/profile']= 'main/user_profile';

$route['logout'] = 'main/logout';
//$route['questions']='main/'

$route['user/ngo/profile']='main/c_show_profile_details';
$route['user/engineer/profile']= 'eng_c/engineer_profile';
// $route['user/engineer/profile/edit']
///Questions
$route['questions/add'] = 'ngo_c/add_question';

//SignUp
$route['user/signup']='main/signup';

//registration
$route['ngo/registration']='ngo_c/ngo_register';

$route['registered']='Ngo_c/ngo_registerprocess';

$route['engineer/registration']='eng_c/eng_registerprocess';
$route['engineer/registered']='eng_c/eng_register';

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
