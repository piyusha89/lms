<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "home";
$route['logout'] = "home/do_logout";
$route['do_login'] = "login/process";

$route['signup'] = "login/signup";
$route['forgot_password'] = "login/forgot_password";

$route['change_password'] = "home/change_password";

/*Student routing*/
$route['edit-details'] = "student/updateDetails";

/*amin routing*/
$route['admin'] = "AdminHome";
$route['admin_login'] = "AdminLogin";
$route['admin_do_login'] = "AdminLogin/process";
$route['admin_logout'] = "AdminHome/doLogout";
$route['admin_change_password'] = "AdminHome/changePassword";
$route['create_question'] = "AdminHome/createQuestion";
$route['add_exam'] = "AdminHome/addExam";

/*ajax call*/
$route['get_subject/(:num)'] = "Ajax/getSubject/$1";

$route['webservice'] = "web_service";
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */