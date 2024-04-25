<?php
require_once '../lib/config.php';
require_once '../server/classes/fetchData.php';
require_once '../server/classes/updateData.php';
require_once('../server/classes/conf.php');
require_once('adminClass.php');
require_once('smtp.php');


$id = $_POST['id'];
$volume = $_POST['volume'];
$type = $_POST['type'];
$status = $_POST['status'];
$profit = $_POST['profit'];
$loss = $_POST['loss'];
$email = $_POST['email'];
$code = $_POST['code'];

switch ($status) {
    case '0':
        $tp = "opened";
        break;
    case '1':
        $tp = "closed";
        break;
    case '2':
        $tp = "paused and requires LMD";
        break;
    case '3':
        $tp = "paused and requires IMF";
        break;
    case '4':
        $tp = "paused and requires TAX";
        break;
}
$msg = new emailMessage();
$emailMessage = new message(EMAIL_HOST, USER_NAME, PASSWORD, PORT, FROM, REPLY_TO);
$emailMessage->send_mail($email, $msg->tradeChange($code, $type, $volume, date("D M j G:i:s Y"), APP_NAME, $tp), "Trade Notification");
$updateResponse = $update->updateTrading($id, $volume, $type, $status, $profit, $loss);
// echo $updateResponse['status'];
header("location:" . SITEURL . "adminDashboard/successful.php");
echo "<script>window.location='/adminDashboard/successful.php'</script>";
