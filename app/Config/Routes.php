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

// route admin
$routes->get('/acoount', 'admin::index', ['filter' => 'role:admin']);

// routes guru



//route operator

//Controller siswa
$routes->get('/siswa', 'siswa::index', ['filter' => 'role:operator']);
$routes->get('/siswa/index', 'siswa::index', ['filter' => 'role:operator']);
$routes->get('/siswa/deletesiswa', 'siswa::index', ['filter' => 'role:operator']);
$routes->get('/siswa/deletesiswa/(:any)', 'siswa::index', ['filter' => 'role:operator']);

//Controller jurusan
$routes->get('/jurusan', 'jurusan::index', ['filter' => 'role:operator']);
$routes->get('/jurusan/index', 'jurusan::index', ['filter' => 'role:operator']);
$routes->get('/jurusan/delete', 'jurusan::index', ['filter' => 'role:operator']);
$routes->get('/jurusan/delete/(:any)', 'jurusan::index', ['filter' => 'role:operator']);

//Controller kelas
$routes->get('/kelas', 'kelas::index', ['filter' => 'role:operator']);
$routes->get('/kelas/index', 'kelas::index', ['filter' => 'role:operator']);
$routes->get('/kelas/deletekelas', 'kelas::index', ['filter' => 'role:operator']);
$routes->get('/kelas/deletekelas/(:any)', 'kelas::index', ['filter' => 'role:operator']);

//Controller mapel
$routes->get('/mapel', 'mapel::index', ['filter' => 'role:operator']);
$routes->get('/mapel/index', 'mapel::index', ['filter' => 'role:operator']);
$routes->get('/mapel/delete', 'mapel::index', ['filter' => 'role:operator']);
$routes->get('/mapel/delete/(:any)', 'mapel::index', ['filter' => 'role:operator']);

//Controller guru
$routes->get('/guru', 'guru::index', ['filter' => 'role:operator']);
$routes->get('/guru/index', 'guru::index', ['filter' => 'role:operator']);
$routes->get('/guru/deleteguru', 'guru::index', ['filter' => 'role:operator']);
$routes->get('/guru/deleteguru/(:any)', 'guru::index', ['filter' => 'role:operator']);

//Controller masterdata
$routes->get('/masterdata', 'masterdata::index', ['filter' => 'role:operator']);
$routes->get('/masterdata/index', 'masterdata::index', ['filter' => 'role:operator']);
$routes->get('/masterdata/tambah', 'masterdata::index', ['filter' => 'role:operator']);
$routes->get('/masterdata/tambah/', 'masterdata::index', ['filter' => 'role:operator']);
$routes->get('/masterdata/delete', 'masterdata::index', ['filter' => 'role:operator']);
$routes->get('/masterdata/delete/(:any)', 'masterdata::index', ['filter' => 'role:operator']);

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
