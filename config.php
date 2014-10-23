<?

 // config.php
 // food-data

 $DB_NAME = 'db';
 $DB_HOST = 'host';
 $DB_USER = 'user';
 $DB_PASS = 'pass';
 
 $mysqli = new mysqli( $DB_HOST, $DB_USER, $DB_PASS, $DB_NAME );
 
 if ( mysqli_connect_errno( ) ) {
 
  printf( "Connect failed: %s\n", mysqli_connect_error( ) );
  exit( );
  
 }

 define( 'PATH', dirname(__FILE__) . '/' );

 require_once( PATH . 'include/function.php' );
 
?>
