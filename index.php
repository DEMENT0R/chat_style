<?php
//PHP counter starts:
$_start_time = microtime(true);
?>
<!doctype html>
<html>
<head>
  <title>Chat</title>
  <meta charset="utf-8">
  <!-- Bootstrap — Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!-- Main Style -->
  <link rel="stylesheet" href="css/style.css">
  <!-- JQuery -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <!-- fullscreen starts -->
  <script type="text/javascript"><!--
  function fullscreen3(element) {
    if(element.requestFullScreen) {
      element.requestFullScreen();
    } else if(element.mozRequestFullScreen) {
      element.mozRequestFullScreen();
    } else if(element.webkitRequestFullScreen) {
      element.webkitRequestFullScreen();
    }
  }

  //псевдокласс
  //:-webkit-full-screen {  background: pink;}

  //fullscreen3(document.documentElement); //вся страница
  //fullscreen3(document.getElementById("videoElement")); //какой-то определенный элемент
  //--></script>
  <!-- Fullscreen ends -->
</head>
<body>
  <div class="btn-group container d-block mx-auto" role="group" aria-label="Menu">
    <a href="crud.php" type="button" class="btn btn-default">База</a>
    <a href="crud.php?id=0" type="button" class="btn btn-default">Юзер</a>
    <a href="calc.html" type="button" class="btn btn-default">Calc</a>
    <a href="#" type="button" class="btn btn-default" onClick="fullscreen3(document.documentElement);return false;">Экран</a>
  </div>
  <p class="test-block" id="w0"><b>Debug</b></p>
  <p class="test-block" id="w480"> | min-width: 480px</p>
  <p class="test-block" id="w768"> | min-width: 768px</p>
  <p class="test-block" id="w992"> | min-width: 992px</p>
  <p class="test-block" id="w1382"> | min-width: 1382px</p>
  <!-- Блок сообщений -->
  <ul id="messages">
    <li>Message #1</li>
    <li>Message #2</li>
    <li><img src="https://media.giphy.com/media/uQCryQVULWVvW/source.gif" id="autoimage" class="d-block mx-auto"></li>
  </ul>
  <div id="chat-block">
    <!-- Поле ввода текста -->
    <input autocomplete="off" placeholder="Наберите текст"/>
    <!-- Кнопка отправки сообщения -->
    <button class="bnt btn-info">Send</button>
  </div>
</body>
</html>
<?php
//functions

function generateRandomString($length){
  $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890';
  $numChars = strlen($chars);
  $string = '';
  for ($i = 0; $i < $length; $i++) {
    $string .= substr($chars, rand(1, $numChars) - 1, 1);
  }
  return $string;
}

?>
<?php
//PHP counter ends:
echo '<!-- ЧАТ: Сгенерировано за '.round((microtime(true) - $_start_time), 5).' сек. -->';
?>
