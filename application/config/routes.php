<?php  if ( ! defined('BASEPATH')) exit('No direct script access listowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typiclisty there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normlisty follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is clisted than the one
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

$route['default_controller'] = "Main";
$route['main'] = "Main";
$route['admin'] = "AdminController";
$route['admin/add-category'] = "AdminController/addCategory";
$route['admin/add-product/(:any)'] = "AdminController/addProduct/$1";
$route['admin/result-add-product'] = "AdminController/addingProduct";
$route['admin/delete-product/(:any)'] = "AdminController/deleteProduct/$1";
$route['admin/result-add-category'] = "AdminController/addingCategory";
$route['admin/result-edit-category'] = "AdminController/updateCategory";
$route['admin/edit-category/(:any)'] = "AdminController/editCategory/$1";
$route['admin/delete-category/(:any)'] = "AdminController/deleteCategory/$1";
$route['admin/order'] = "AdminController/order";
$route['admin/promotion'] = "AdminController/promotion";
$route['admin/product'] = "AdminController/product";
$route['admin/list-product'] = "AdminController/listProduct";
$route['admin/tests'] = "AdminController/test";
$route['404_override'] = '';

// Auth
$route['login'] = "Main/login";
$route['logout'] = "auth/logout";
$route['regis'] = "auth/create_user";


$route['cart'] = "ProductController/getCart";
$route['product/add/(:any)'] = "ProductController/addToCart/$1";
$route['categories/(:any)'] = "Main/categories/$1";
$route['product/(:any)'] = "Main/product/$1/$2";



/* End of file routes.php */
/* Location: ./application/config/routes.php */