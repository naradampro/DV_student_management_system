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
$routes->setDefaultController('Home');
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
$routes->get('/', 'Home::index');

//routes for student management
$routes->get('student', 'StudentController::index');
$routes->match(['get', 'post'], 'student/student_registration_form/', 'StudentController::create');
$routes->match(['get', 'post'], 'student/all_students/', 'StudentController::all_view');
$routes->get('student/(:segment)', 'StudentController::view/$1');

//routes for teacher managemant
$routes->get('teacher', 'TeacherController::index');
$routes->match(['get', 'post'], 'teacher/add_teacher_form/', 'TeacherController::create');
$routes->get('teacher/edit/(:segment)', 'TeacherController::edit/$1');
$routes->post('teacher/update/(:segment)', 'TeacherController::update/$1');
$routes->get('teacher/(:segment)', 'TeacherController::view/$1');

//routes for class managemant
$routes->get('class', 'ClassController::index');
$routes->match(['get', 'post'], 'class/add_class_form/', 'ClassController::create');
$routes->get('class/(:segment)', 'ClassController::view/$1');
$routes->get('class/edit/(:segment)', 'ClassController::edit/$1');
$routes->post('class/update/(:segment)', 'ClassController::update/$1');

//routes for subject managemant
$routes->get('subject', 'SubjectController::index');
$routes->match(['get', 'post'], 'subject/add_subject_form/', 'SubjectController::create');
$routes->get('subject/edit/(:segment)', 'SubjectController::edit/$1');
$routes->post('subject/update/(:segment)', 'SubjectController::update/$1');
 
//routes for guardian managemant
$routes->get('guardian', 'GuardianController::index');
$routes->match(['get', 'post'], 'guardian/add_guardian_form/', 'GuardianController::create');

//routes for for temporary dev purposes
$routes->get('devforms/', 'Home::devforms');

$routes->get('(:any)', 'Forms::view/$1');
 
//routes for exam management
$routes->get('exam', 'ExamController::index');
//$routes->match(['get', 'post'], 'exam/exam_details_form/', 'ExamController::create');



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
