<?php
  include('../../utils.php');
  configSession();

  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $senderName = htmlspecialchars_decode($_POST['senderName']);
    $senderPhone = htmlspecialchars_decode($_POST['senderPhone']);
    $senderWx = htmlspecialchars_decode($_POST['senderWx']);
    $senderMail = htmlspecialchars_decode($_POST['senderMail']);
    $receiverAddress = htmlspecialchars_decode($_POST['receiverAddress']);
    $receiverName = htmlspecialchars_decode($_POST['receiverName']);
    $receiverPhone = htmlspecialchars_decode($_POST['receiverPhone']);
    $receiverWx = htmlspecialchars_decode($_POST['receiverWx']);
    $receiverMail = htmlspecialchars_decode($_POST['receiverMail']);
    $items = json_decode(htmlspecialchars_decode($_POST['items']), true);

    $getDate = date('Y-n-j H:i:s');

    $sql = "INSERT INTO shipments (senderID, senderName, senderPhone, senderWx, senderMail,
                                   receiverAddress, receiverName, receiverPhone, receiverWx, receiverMail)
            VALUES ('".$_SESSION['login_id']."', '".$senderName."', '".$senderPhone."', '".$senderWx."', '".$senderMail."',
                    '".$receiverAddress."', '".$receiverName."', '".$receiverPhone."', '".$receiverWx."', '".$receiverMail."')";
    $query = $db->prepare($sql);
    if (!$query->execute()) {
      echo '{"status":"error", "errorMsg" : "服务器繁忙，请稍后再试"}';
      exit;
    }
    $itemList = json_encode($items);
    $shipmentID = mysqli_insert_id($db);

    if (mysqli_query($db, "START TRANSACTION;")){
       $query2 = $db->prepare("INSERT INTO shipment_items (itemName, itemCount, itemWeight, itemPrice, s_id)
       VALUES(?,?,?,?,'".$shipmentID."');");

       foreach ($items as $item) {
          $query2->bind_param ( 'ssss', $item['itemName'], $item['itemCount'], $item['itemWeight'], $item['itemCount']);
          if (!$query2->execute()) {
             echo '{"status":"error", "errorMsg" : "服务器暂时无法存储物品数据，请稍后再试"}';
             mysqli_query($db, "DELETE FROM shipment_items WHERE s_id='".$shipmentID."');");
             mysqli_query($db, "ROLLBACK;");
             exit;
          }
       }
       mysqli_query($db, "COMMIT;");
       echo '{"status":"success"}';
    }



  }
?>
