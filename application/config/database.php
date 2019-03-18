<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| For complete instructions please consult the 'Database Connection'
| page of the User Guide.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|	['hostname'] The hostname of your database server.
|	['username'] The username used to connect to the database
|	['password'] The password used to connect to the database
|	['database'] The name of the database you want to connect to
|	['dbdriver'] The database type. ie: mysql.  Currently supported:
				 mysql, mysqli, postgre, odbc, mssql, sqlite, oci8
|	['dbprefix'] You can add an optional prefix, which will be added
|				 to the table name when using the  Active Record class
|	['pconnect'] TRUE/FALSE - Whether to use a persistent connection
|	['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
|	['cache_on'] TRUE/FALSE - Enables/disables query caching
|	['cachedir'] The path to the folder where cache files should be stored
|	['char_set'] The character set used in communicating with the database
|	['dbcollat'] The character collation used in communicating with the database
|				 NOTE: For MySQL and MySQLi databases, this setting is only used
| 				 as a backup if your server is running PHP < 5.2.3 or MySQL < 5.0.7
|				 (and in table creation queries made with DB Forge).
| 				 There is an incompatibility in PHP with mysql_real_escape_string() which
| 				 can make your site vulnerable to SQL injection if you are using a
| 				 multi-byte character set and are running versions lower than these.
| 				 Sites using Latin-1 or UTF-8 database character set and collation are unaffected.
|	['swap_pre'] A default table prefix that should be swapped with the dbprefix
|	['autoinit'] Whether or not to automatically initialize the database.
|	['stricton'] TRUE/FALSE - forces 'Strict Mode' connections
|							- good for ensuring strict SQL while developing
|
| The $active_group variable lets you choose which connection group to
| make active.  By default there is only one group (the 'default' group).
|
| The $active_record variables lets you determine whether or not to load
| the active record class
*/

$active_group = 'default';
$active_record = TRUE;


// $db['default']['hostname'] = '180.250.165.139';
// $db['default']['username'] = 'root';
// $db['default']['password'] = 'u!ns4r4y4j4y420!7';
// $db['default']['database'] = 'ukt_2018';
// $db['default']['dbdriver'] = 'mysqli';
// $db['default']['dbprefix'] = '';
// $db['default']['pconnect'] = TRUE;
// $db['default']['db_debug'] = TRUE;
// $db['default']['cache_on'] = FALSE;
// $db['default']['cachedir'] = '';
// $db['default']['char_set'] = 'utf8';
// $db['default']['dbcollat'] = 'utf8_general_ci';
// $db['default']['swap_pre'] = '';
// $db['default']['autoinit'] = TRUE;
// $db['default']['stricton'] = FALSE;

$db['default']['hostname'] = 'localhost';
$db['default']['username'] = 'root';
$db['default']['password'] = '';
$db['default']['database'] = 'fingerprint';
$db['default']['dbdriver'] = 'mysqli';
$db['default']['dbprefix'] = '';
$db['default']['pconnect'] = TRUE;
$db['default']['db_debug'] = TRUE;
$db['default']['cache_on'] = FALSE;
$db['default']['cachedir'] = '';
$db['default']['char_set'] = 'utf8';
$db['default']['dbcollat'] = 'utf8_general_ci';
$db['default']['swap_pre'] = '';
$db['default']['autoinit'] = TRUE;
$db['default']['stricton'] = FALSE;

// koneksi localhost
// $db['localhost']['hostname'] = 'localhost';
// $db['localhost']['username'] = 'root';
// $db['localhost']['password'] = '';
// $db['localhost']['database'] = 'sidamas';
// $db['localhost']['dbdriver'] = 'mysqli';
// $db['localhost']['dbprefix'] = '';
// $db['localhost']['pconnect'] = TRUE;
// $db['localhost']['db_debug'] = TRUE;
// $db['localhost']['cache_on'] = FALSE;
// $db['localhost']['cachedir'] = '';
// $db['localhost']['char_set'] = 'utf8';
// $db['localhost']['dbcollat'] = 'utf8_general_ci';
// $db['localhost']['swap_pre'] = '';
// $db['localhost']['autoinit'] = TRUE;
// $db['localhost']['stricton'] = FALSE;


// koneksi Simpeg
// $db['simpeg']['hostname'] = '10.101.10.246';
// $db['simpeg']['username'] = 'root';
// $db['simpeg']['password'] = 'mrpresident';
// $db['simpeg']['database'] = 'simpeg_0511';
// $db['simpeg']['dbdriver'] = 'mysqli';
// $db['simpeg']['dbprefix'] = '';
// $db['simpeg']['pconnect'] = TRUE;
// $db['simpeg']['db_debug'] = TRUE;
// $db['simpeg']['cache_on'] = FALSE;
// $db['simpeg']['cachedir'] = '';
// $db['simpeg']['char_set'] = 'utf8';
// $db['simpeg']['dbcollat'] = 'utf8_general_ci';
// $db['simpeg']['swap_pre'] = '';
// $db['simpeg']['autoinit'] = TRUE;
// $db['simpeg']['stricton'] = FALSE;

// koneksi APT Lokal
$db['apt']['hostname'] = 'localhost';
$db['apt']['username'] = 'root';
$db['apt']['password'] = '';
$db['apt']['database'] = 'apt';
$db['apt']['dbdriver'] = 'mysqli';
$db['apt']['dbprefix'] = '';
$db['apt']['pconnect'] = TRUE;
$db['apt']['db_debug'] = TRUE;
$db['apt']['cache_on'] = FALSE;
$db['apt']['cachedir'] = '';
$db['apt']['char_set'] = 'utf8';
$db['apt']['dbcollat'] = 'utf8_general_ci';
$db['apt']['swap_pre'] = '';
$db['apt']['autoinit'] = TRUE;
$db['apt']['stricton'] = FALSE;

// koneksi Simpeg Lokal
$db['simpeg']['hostname'] = 'localhost';
$db['simpeg']['username'] = 'root';
$db['simpeg']['password'] = '';
$db['simpeg']['database'] = 'simpeg_0511';
$db['simpeg']['dbdriver'] = 'mysqli';
$db['simpeg']['dbprefix'] = '';
$db['simpeg']['pconnect'] = TRUE;
$db['simpeg']['db_debug'] = TRUE;
$db['simpeg']['cache_on'] = FALSE;
$db['simpeg']['cachedir'] = '';
$db['simpeg']['char_set'] = 'utf8';
$db['simpeg']['dbcollat'] = 'utf8_general_ci';
$db['simpeg']['swap_pre'] = '';
$db['simpeg']['autoinit'] = TRUE;
$db['simpeg']['stricton'] = FALSE;

// koneksi Remun Lokal
$db['remun']['hostname'] = 'localhost';
$db['remun']['username'] = 'root';
$db['remun']['password'] = '';
$db['remun']['database'] = 'remun';
$db['remun']['dbdriver'] = 'mysqli';
$db['remun']['dbprefix'] = '';
$db['remun']['pconnect'] = TRUE;
$db['remun']['db_debug'] = TRUE;
$db['remun']['cache_on'] = FALSE;
$db['remun']['cachedir'] = '';
$db['remun']['char_set'] = 'utf8';
$db['remun']['dbcollat'] = 'utf8_general_ci';
$db['remun']['swap_pre'] = '';
$db['remun']['autoinit'] = TRUE;
$db['remun']['stricton'] = FALSE;

// koneksi siakad Lokal
$db['siakad']['hostname'] = 'localhost';
$db['siakad']['username'] = 'root';
$db['siakad']['password'] = '';
$db['siakad']['database'] = 'siakad_01';
$db['siakad']['dbdriver'] = 'mysqli';
$db['siakad']['dbprefix'] = '';
$db['siakad']['pconnect'] = TRUE;
$db['siakad']['db_debug'] = TRUE;
$db['siakad']['cache_on'] = FALSE;
$db['siakad']['cachedir'] = '';
$db['siakad']['char_set'] = 'utf8';
$db['siakad']['dbcollat'] = 'utf8_general_ci';
$db['siakad']['swap_pre'] = '';
$db['siakad']['autoinit'] = TRUE;
$db['siakad']['stricton'] = FALSE;




// koneksi siakad_server
$db['siakad_server']['hostname'] = '180.250.165.150';
$db['siakad_server']['username'] = 'iain';
$db['siakad_server']['password'] = 'ampelakademik!3';
$db['siakad_server']['database'] = 'iainmigrasi';
$db['siakad_server']['dbdriver'] = 'postgre';
$db['siakad_server']['dbprefix'] = '';
$db['siakad_server']['pconnect'] = TRUE;
$db['siakad_server']['db_debug'] = TRUE;
$db['siakad_server']['cache_on'] = FALSE;
$db['siakad_server']['cachedir'] = '';
$db['siakad_server']['char_set'] = 'utf8';
$db['siakad_server']['dbcollat'] = 'utf8_general_ci';
$db['siakad_server']['swap_pre'] = '';
$db['siakad_server']['autoinit'] = TRUE;
$db['siakad_server']['stricton'] = FALSE;


/* End of file database.php */
/* Location: ./application/config/database.php */
