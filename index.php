<?php
//PHP counter starts:
$_start_time = microtime(true);
?>
<!doctype html>
<html>
<head>
  <title>Chat</title>
  <meta charset="utf-8">
  <!-- Main Style -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Bootstrap — Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
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
  <p></p>
  <div class="btn-group center-block" role="group" aria-label="...">
    <a href="crud.php" class="btn btn-default">База</a>
    <a href="crud.php?id=0" class="btn btn-default">Юзер</a>
    <a href="calc.html" class="btn btn-default">Calc</a>
    <a href="#" class="btn btn-default" onClick="fullscreen3(document.documentElement);return false;">Экран</a>
  </div>
  <p>...</p>
  <p class="test-block" id="w0">w0</p>
  <p class="test-block" id="w480">min-width: 480px</p>
  <p class="test-block" id="w768">min-width: 768px</p>
  <p class="test-block" id="w992">min-width: 992px</p>
  <p class="test-block" id="w1382">min-width: 1382px</p>
  <!-- Блок сообщений -->
  <ul id="messages">
    <li>Message #1</li>
    <li>Message #2</li>
    <li>Message #3</li>
    <li><img src="https://media.giphy.com/media/uQCryQVULWVvW/source.gif" id="autoimage" class="center-block"></li>
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
