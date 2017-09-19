<?php
  $from = htmlspecialchars($_POST["depLoc"]);
  $to = htmlspecialchars($_POST["arriLoc"]);
  $dep = htmlspecialchars($_POST["depDate"]);
  $arri = htmlspecialchars($_POST["arriDate"]);

  $myfile = fopen("request.json", "w") or die("Unable to open file!");
  // $txt = "Mickey Mouse\n";
  // fwrite($myfile, $txt);
  // $txt = "Minnie Mouse\n";
  // fwrite($myfile, $txt);
  $txt = '{
  "request": {
    "slice": [
      {
        "origin": "'.$from.'",
        "destination": "'.$to.'",
        "date": "'.$dep.'"
      },
      {
        "origin": "'.$to.'",
        "destination": "'.$from.'",
        "date": "'.$arri.'"
      }
    ],
    "passengers": {
      "adultCount": 1,
      "infantInLapCount": 0,
      "infantInSeatCount": 0,
      "childCount": 0,
      "seniorCount": 0
    },
    "solutions": 10,
    "refundable": false
  }
  }';
  fwrite($myfile, $txt);
  fclose($myfile);

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
  // echo "The average price is " . $price;

  echo '{"status":"success", "price" : "' . $price . '"}';
?>
