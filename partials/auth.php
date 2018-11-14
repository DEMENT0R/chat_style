<?php
include 'classes/safemysql.class.php';

$db     = new SafeMysql();
$table  = "users";
$fields = ['id', 'name', 'ssid', 'password', 'mail', 'text', 'sex', 'updated'];

if ($_COOKIE['ssid'] != '') {
  $row = $db->getRow("SELECT * FROM ?n WHERE ssid=?s", $table, $_COOKIE['ssid']);
  $username = $row['name'];
  /*
  if ($username =='') {
     $username = 'friend';
  }
  */
  setcookie("user_name", $username, time()+3600*31, '/');
  $last_time = $row['updated'];
  $debug_msg = 'Пользователь <b>'.$username.'</b> найден! ('.$last_time.')<br>';
} else {
  $username = 'unknown user';
  $ssid = generateRandomString(10);
  setcookie("ssid", $ssid, time()+3600*31, '/');
  //setCookie('hash', 'test me, please', time() + 3600, '/', 'site.ru');
  //$db->query("INSERT INTO `?n` SET `ssid`=?u", $table, $ssid);
  $db->query("INSERT INTO `".$table."` SET ssid='".$ssid."'");
  $debug_msg = 'Новый пользователь! Псевдоним <b>'.$username.'</b>! (ssid = '.$ssid.')<br>';
}
?>
