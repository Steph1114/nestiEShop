<?php

namespace Config;



// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('C_Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'C_Home::index');
$routes->get('article', 'C_Article::index');
//$routes->get('/', 'C_Article_Details::index');
/* Creating a route that will respond to the URL `http://example.com/recipe` and will execute the
`index()` method of the `C_Recipe` controller. */
$routes->get('recipe', 'C_Recipe::index'); 
$routes->get('rec_details', 'C_Recipe_Details::index');
/* This is a route definition. It is telling the framework that when the URL `http://example.com/cart`
is requested, the `index()` method of the `C_Cart` controller should be executed. */
$routes->get('cart', 'C_Cart::index',['filter'=>'auth']);
$routes->get('login', 'C_User::index',['filter'=>'noauth']);
$routes->get('logout', 'C_User::logout');
//$routes->get('register', 'C_User::register');
$routes->match(['get','post'],'register', 'C_User::register',['filter'=>'noauth']);
$routes->match(['get','post'],'login', 'C_User::login',['filter'=>'noauth']);
$routes->get('profile', 'C_Profile::index',['filter'=>'auth']);
$routes->get('C_Profile', 'C_Profile::index',['filter'=>'auth']);
$routes->get('rec_details/(:any)', 'C_Recipe_Details::index',['filter'=>'auth']);
$routes->get('ing_details/(:any)', 'C_Article_Details::index',['filter'=>'auth']);





/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
