<?php
   include("../utils.php");
   configSession();

   if(session_destroy()) {
      header("Location: ../index.php");
   }
?>
