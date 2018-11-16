$script_update_time = 3000;
$script_update_needed = false;

//first messages loading
//UpdateMessages();
//autoupdate
setInterval(function(){
  if ($script_update_needed) {
    UpdateMessages();
  }
}, $script_update_time);

//отправка сообщения
//при нажатии кнопки
$('#message-send').click(function(){
  sendMessage();

  $('#message-input').val('');
});
//при нажатии enter
$("#message-input").keyup(function(event){
  if(event.keyCode == 13){
    sendMessage();
  }
});

//////////////
// FUNCTIONS//
//////////////

//update function
function UpdateMessages(){
  $('#main-window').load('partials/app.php?get_message=3');
  //$.post("stupid_bot.php");
}

//AJAX POST DEBUG
function onAjaxSuccess(data)
{
  alert(data);
}

//get cookie
function get_cookie ( cookie_name )
{
  var results = document.cookie.match ( '(^|;) ?' + cookie_name + '=([^;]*)(;|$)' );

  if ( results )
  return ( unescape ( results[2] ) );
  else
  return null;
}

//send message
function sendMessage(){
  if ($('#message-input').val() != '') {
    ///////////////////
    //default sending//
    ///////////////////
    $.post(
      "partials/app.php",
      {
        send_message: "1",
        id: 0,
        ssid: get_cookie ( "ssid" ),
        name: get_cookie ( "user_name" ),
        text: $('#message-input').val()
      },
      //debug
      //onAjaxSuccess
    );
    //////////////////////////
    //sending to NEUROBOT!!!//
    //////////////////////////
    $.post(
      "partials/like_send.php",
      {
        ssid: get_cookie ( "ssid" ),
        text: $('#message-input').val()
      },
      //debug
      //onAjaxSuccess
    );

    $('#message-input').val('');
    $script_update_needed = true;
  } else {
    $('#message-input').attr("placeholder", "Введите сообщение для бота!");
  }
}
