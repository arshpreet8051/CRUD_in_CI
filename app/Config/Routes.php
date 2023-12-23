<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');
$routes->post('Home/insert', 'Home::insert');
$routes->get('Home/show', 'Home::show');
$routes->get('Home/delete/(:num)', 'Home::delete/$1');
$routes->get('Home/edit/(:num)', 'Home::edit/$1');
$routes->post('Home/update', 'Home::update');
//--------------------------------------------
$routes->post('/student_controller/create_student', 'student_controller::index');
$routes->get('/student_controller/create_student', 'student_controller::index');
$routes->get('/', 'student_controller::login');
$routes->post('student_controller/insert', 'student_controller::insert');
$routes->post('student_controller/show_student', 'student_controller::show');
$routes->get('student_controller/show_student', 'student_controller::show');
$routes->get('student_controller/delete_student/(:num)', 'student_controller::delete/$1');
$routes->get('student_controller/edit_student/(:num)', 'student_controller::edit/$1');
$routes->post('student_controller/update_student', 'student_controller::update');
$routes->post('student_controller/login', 'student_controller::login');
$routes->get('student_controller/login', 'student_controller::login');
$routes->post('student_controller/credentials', 'student_controller::credentials');
$routes->post('student_controller/signup', 'student_controller::signup');
$routes->get('student_controller/signup', 'student_controller::signup');
$routes->get('student_controller/log_view', 'student_controller::log_view');
$routes->get('student_controller/admin_view', 'student_controller::admin_view');
$routes->post('student_controller/addUser', 'student_controller::addUser');

