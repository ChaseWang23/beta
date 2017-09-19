<?php
  $price = htmlspecialchars($_POST["from"]);
  echo '{"status":"success", "price" : "' . $price . '"}';
?>
