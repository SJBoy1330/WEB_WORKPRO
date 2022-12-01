<?php

defined('BASEPATH') or exit('No direct script access allowed');



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

|	https://codeigniter.com/user_guide/general/routing.html

|

| -------------------------------------------------------------------------

| RESERVED ROUTES

| -------------------------------------------------------------------------

|

| There are three reserved routes:

|

|	$route['default_controller'] = 'welcome';

|

| This route indicates which controller class should be loaded if the

| URI contains no data. In the above example, the "welcome" class

| would be loaded.

|

|	$route['404_override'] = 'errors/page_missing';

|

| This route will tell the Router which controller/method to use if those

| provided in the URL cannot be matched to a valid route.

|

|	$route['translate_uri_dashes'] = FALSE;

|

| This is not exactly a route, but allows you to automatically route

| controller and method names that contain dashes. '-' isn't a valid

| class or method name character, so it requires translation.

| When you set this option to TRUE, it will replace ALL dashes in the

| controller and method URI segments.

|

| Examples:	my-controller/index	-> my_controller/index

|		my-controller/my-method	-> my_controller/my_method

*/

$route['default_controller'] = 'auth/controller_ctl';

$route['auth']  = 'auth/controller_ctl';

$route['auth/(:any)'] = 'auth/controller_ctl/$1';

$route['auth/(:any)/(:any)'] = 'auth/controller_ctl/$1/$2';


$route['func_auth']  = 'auth/function_ctl';

$route['func_auth/(:any)'] = 'auth/function_ctl/$1';

$route['func_auth/(:any)/(:any)'] = 'auth/function_ctl/$1/$2';


$route['home']  = 'home/controller_ctl';

$route['home/(:any)'] = 'home/controller_ctl/$1';

$route['home/(:any)/(:any)'] = 'home/controller_ctl/$1/$2';


$route['perusahaan']  = 'perusahaan/controller_ctl';

$route['perusahaan/(:any)'] = 'perusahaan/controller_ctl/$1';

$route['perusahaan/(:any)/(:any)'] = 'perusahaan/controller_ctl/$1/$2';


$route['karyawan']  = 'karyawan/controller_ctl';

$route['karyawan/(:any)'] = 'karyawan/controller_ctl/$1';

$route['karyawan/(:any)/(:any)'] = 'karyawan/controller_ctl/$1/$2';


$route['jadwal_kerja']  = 'jadwal_kerja/controller_ctl';

$route['jadwal_kerja/(:any)'] = 'jadwal_kerja/controller_ctl/$1';

$route['jadwal_kerja/(:any)/(:any)'] = 'jadwal_kerja/controller_ctl/$1/$2';


$route['presensi']  = 'presensi/controller_ctl';

$route['presensi/(:any)'] = 'presensi/controller_ctl/$1';

$route['presensi/(:any)/(:any)'] = 'presensi/controller_ctl/$1/$2';


$route['persetujuan']  = 'persetujuan/controller_ctl';

$route['persetujuan/(:any)'] = 'persetujuan/controller_ctl/$1';

$route['persetujuan/(:any)/(:any)'] = 'persetujuan/controller_ctl/$1/$2';


$route['manajemen']  = 'manajemen/controller_ctl';

$route['manajemen/(:any)'] = 'manajemen/controller_ctl/$1';

$route['manajemen/(:any)/(:any)'] = 'manajemen/controller_ctl/$1/$2';


$route['laporan']  = 'laporan/controller_ctl';

$route['laporan/(:any)'] = 'laporan/controller_ctl/$1';

$route['laporan/(:any)/(:any)'] = 'laporan/controller_ctl/$1/$2';


$route['informasi']  = 'informasi/controller_ctl';

$route['informasi/(:any)'] = 'informasi/controller_ctl/$1';

$route['informasi/(:any)/(:any)'] = 'informasi/controller_ctl/$1/$2';


$route['web_view']  = 'web_view/controller_ctl';

$route['web_view/(:any)'] = 'web_view/controller_ctl/$1';

$route['web_view/(:any)/(:any)'] = 'web_view/controller_ctl/$1/$2';

$route['web_view/(:any)/(:any)/(:any)'] = 'web_view/controller_ctl/$1/$2/$3';

$route['web_view/(:any)/(:any)/(:any)/(:any)'] = 'web_view/controller_ctl/$1/$2/$3/$4';

$route['web_view/(:any)/(:any)/(:any)/(:any)/(:any)'] = 'web_view/controller_ctl/$1/$2/$3/$4/$5';



$route['404_override'] = '';

$route['translate_uri_dashes'] = FALSE;
