<?php
  include('../../utils.php');
  configSession();

  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $depLoc = htmlspecialchars_decode($_POST['depLoc']);
    $depDate = htmlspecialchars_decode($_POST['depDate']);
    $depTime = htmlspecialchars_decode($_POST['depTime']);
    $arriLoc = htmlspecialchars_decode($_POST['arriLoc']);
    $arriDate = htmlspecialchars_decode($_POST['arriDate']);
    $arriTime = htmlspecialchars_decode($_POST['arriTime']);
    $price = htmlspecialchars_decode($_POST['price']);
    $luggage = htmlspecialchars_decode($_POST['luggage']);

    $getDate = date('Y-n-j H:i:s');

    $depDateTime = $depDate . " " . $depTime;
    $arriDateTime = $arriDate . " " . $arriTime;

    $sql = "INSERT INTO flights (depLoc, depDate, arriLoc, arriDate, price, luggage, regisDate, u_id)
            VALUES ('".$depLoc."', '".$depDateTime."', '".$arriLoc."', '".$arriDateTime."', '".$price."', '".$luggage."', '".$getDate."', '".$_SESSION['login_id']."')";
    $query = $db->prepare($sql);
    if (!$query->execute()) {
      echo '{"status":"error", "errorMsg" : "服务器繁忙，请稍后再试"}';
      exit;
    }

    echo '{"status":"success"}';
  }
?>
