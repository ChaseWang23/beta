<?php
  $myfile = fopen("request.json", "w") or die("Unable to open file!");
  // $txt = "Mickey Mouse\n";
  // fwrite($myfile, $txt);
  // $txt = "Minnie Mouse\n";
  // fwrite($myfile, $txt);
  $txt = '{
  "request": {
    "slice": [
      {
        "origin": "YYZ",
        "destination": "SHA",
        "date": "2017-11-01"
      },
      {
        "origin": "SHA",
        "destination": "YYZ",
        "date": "2017-12-21"
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

  // header process_json.php
  header("Location: qpx.php");
?>
