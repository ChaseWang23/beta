<?php
  include('../../utils.php');
  configSession();

  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $depLoc = htmlspecialchars_decode($_POST['depLoc']);
    $arriLoc = htmlspecialchars_decode($_POST['arriLoc']);
    $depDate = htmlspecialchars_decode($_POST['depDate']);
    $arriDate = htmlspecialchars_decode($_POST['arriDate']);
    $ticketName = htmlspecialchars_decode($_POST['ticketName']);
    $ticketPassport = htmlspecialchars_decode($_POST['ticketPassport']);
    $luggage = htmlspecialchars_decode($_POST['luggage']);
    $finalPrice = htmlspecialchars_decode($_POST['finalPrice']);


    $getDate = date('Y-n-j H:i:s');

    $sql = "INSERT INTO tickets (depLoc, arriLoc, depDate, arriDate, ticketName, ticketPassport, luggage, finalPrice, u_id)
            VALUES ('".$depLoc."', '".$arriLoc."', '".$depDate."', '".$arriDate."', '".$ticketName."', '".$ticketPassport."', '".$luggage."', '".$finalPrice."', '".$_SESSION['login_id']."')";
    $query = $db->prepare($sql);
    if (!$query->execute()) {
      echo '{"status":"error", "errorMsg" : "服务器繁忙，请稍后再试"}';
      exit;
    }

    echo '{"status":"success"}';
  }
?>
