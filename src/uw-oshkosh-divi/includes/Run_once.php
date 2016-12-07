<?php
if (file_exists('../wp-content/custom-files/google-custom-search.php'))
  {
      global $wpdb;
      $prefix= $wpdb->prefix;
      $gcs_table = $prefix . "gcs_address";
      $script= file_get_contents('../wp-content/custom-files/google-custom-search.php');
      // takes off php script before and after
      $scrub_php= substr($script,16,-6);
      //inserts data into table
      $wpdb->insert(
      $gcs_table,
      array(
        'address_code' => $scrub_php
       ),
      array(
        '%s'
       )
     );
     // deletes file and folder
       if(unlink("../wp-content/custom-files/google-custom-search.php"))
       {
         rmdir("../wp-content/custom-files");
       }
   }
 ?>
