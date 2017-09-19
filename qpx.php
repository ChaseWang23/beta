<?php
  $startTime = microtime(true);

  $output = shell_exec('curl -d @request.json --header "Content-Type: application/json" https://www.googleapis.com/qpxExpress/v1/trips/search?key=AIzaSyCDzoUhhz2vOSK5EZ9J-JTfqjlODRqaaY4');
  $jsonIterator = new RecursiveIteratorIterator(
      new RecursiveArrayIterator(json_decode($output, TRUE)),
      RecursiveIteratorIterator::SELF_FIRST);
  $response = array();

  foreach ($jsonIterator as $key => $val) {
    if(is_array($val) && ($key == "pricing")) {
      echo "";
    } else if ($key == "saleTotal") {
      $val2 = str_replace("CAD", "", $val);
      array_push($response, $val2);
    }
  }

  $price = array_sum($response)/count($response);
  echo "The average price is " . $price;

  echo "<br>";
  $endTime = microtime(true);
  $elapsed = $endTime - $startTime;
  echo "Execution time : $elapsed seconds";
?>
