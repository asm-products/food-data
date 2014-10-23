<?php

 // index.php
 // food-data
 
 require_once( 'config.php' );
 
 if( !empty( $_GET['module'] ) && $_GET['module'] == "product" ):
  
  // product module
  
  if( !empty( $_GET['action'] ) && $_GET['action'] == "update" ):
   
   // load update module
   
   echo "update product";
   
  elseif( empty( $_GET['action'] ) ):
   
   // load product
   
   echo "product";
   
  else:
   
   get_404( );
   
  endif;
 
 elseif( empty( $_GET['module'] ) ):
  
  include_once( PATH . 'template/font-page.php' );
 
 else:
  
  get_404( );
  
 endif;
 
?>
