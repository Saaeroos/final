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
$route['user/ngo/profile/edit'] = 'ngo_c/ngo_edit_profile';
$route['user/ngo/profile/update'] = 'ngo_c/c_update_ngo';
$route['user/ngo/profile/delete'] = 'ngo_c/ngo_delete_profile';

$route['user/engineer/profile']= 'main/c_show_profile_details';
$route['user/engineer/profile/edit']= 'eng_c/eng_edit_profile';
$route['user/engineer/profile/update'] = 'eng_c/c_update_eng';
$route['user/eng/profile/delete'] = 'eng_c/eng_delete_profile';

$route['engineer/(:num)/request'] = 'eng_c/share_request/$1';
$route['user/engineer/share_requests']= 'eng_c/c_share_request_eng';
$route['profile/ngo/share_requests']= 'ngo_c/c_share_request_ngo';

// used for shared profile view
$route['engineer/(:num)/profile'] = 'main/engineer_profile';

///Questions
$route['questions/add'] = 'ngo_c/add_question';

//SignUp
$route['user/signup']='main/signup';

//registration
$route['ngo/registration']='ngo_c/ngo_register';

$route['registered']='Ngo_c/ngo_registerprocess';

$route['engineer/registration']='eng_c/eng_registerprocess';
$route['engineer/registered']='eng_c/eng_register';

////////// Admin section ///////
$route['admin/login']  = 'admin_c/login';
$route['admin/forgot_password']= 'admin_c/forgot_password';
// $route['admin/ngos']= 'admin_c/ngos';
$route['admin/ngos/view/(:num)']= 'admin_c/view_ngo/$1';
$route['admin/ngos/delete/(:num)'] = 'admin_c/c_delete_ngo/$1';

//15-11-2017 mohamed admin edit routes
$route['admin/edit/question']= 'admin_c/c_edit_question';
$route['admin/edit/answer']= 'admin_c/c_edit_answer';
$route['admin/edit/comment']= 'admin_c/c_edit_comment';
//update buttons routes
   // $route['admin/update/comment']= 'admin_c/c_edit_comment';
   // $route['admin/update/answer']= 'admin_c/c_update_answer';
   // $route['admin/update/question']= 'admin_c/c_update_question';
//admin list of pending eng, ngo
$route['admin/pending/ngos']= 'admin_c/c_list_of_ngo_newforms';
$route['admin/pending/engineer']= 'admin_c/c_list_of_eng_newforms';
//admin list of approved eng,ngos
$route['admin/ngos']= 'admin_c/c_list_of_ngo';
$route['admin/engineers']= 'admin_c/c_list_of_eng';

//admin show Details
$route['admin/pending/engineer/details'] = 'admin_c/c_eng_details';
$route['admin/engineer/details'] = 'admin_c/c_eng_details';
$route['admin/ngo/pending/details'] = 'admin_c/c_ngo_details';
$route['admin/ngo/details'] = 'admin_c/c_ngo_details';
//admin approved
$route['admin/pending/engineer/approve'] = 'admin_c/c_approve_eng';
$route['admin/pending/ngo/approve'] = 'admin_c/c_approve_ngo';
//admin delete
$route['admin/engineer/delete'] = 'admin_c/c_delete_eng';
$route['admin/ngo/delete'] = 'admin_c/c_delete_ngo';
$route['admin/question/delete'] = 'admin_c/c_delete_question';
$route['admin/answer/delete'] = 'admin_c/c_delete_answer';
$route['admin/comment/delete'] = 'admin_c/c_delete_comment';
// make sure there are no spaces in the left and right part
// make sure you send the catched parts as $1, this will be the engineer id later
$route['admin/questions'] = 'admin_c/c_list_of_questions';
$route['admin/answers'] = 'admin_c/c_list_of_answers';
$route['admin/comments'] = 'admin_c/c_list_of_comments';
