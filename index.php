<?php
//PHP counter starts:
$_start_time = microtime(true);
?>

<!doctype html>
<html>
<head>
  <title>Chat</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/style.css">

  <!-- Bootstrap — Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

</head>
<body>
  <p>
      <script type="text/javascript"><!--
    //Ищем правильный метод
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
    <a href="#" onClick="fullscreen3(document.documentElement);return false;">FS</a>
  </p>
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
//PHP counter ends:
echo '<!-- ЧАТ: Сгенерировано за '.round((microtime(true) - $_start_time), 5).' сек. -->';
?>