<?php

 // index.php
 // food-data
 
 if( !empty( $_GET['module'] ) && $_GET['module'] == "product" ):
  
  echo "product";
 
 elseif( empty( $_GET['module'] ) ):
  
  echo "home";
 
 else:
  
  get_404( );
  
 endif;
 
?>
