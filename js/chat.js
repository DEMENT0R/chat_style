$script_update_time = 1000;

//first messages loading
UpdateMessages();
//autoupdate
setInterval(function(){
  UpdateMessages();
}, $script_update_time);

//отправка сообщения
//при нажатии кнопки
$('#send-message').click(function(){
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
  $('#chat-history').load('app.php?get_message=3');
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
      "app.php",
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
      "like_send.php",
      {
        ssid: get_cookie ( "ssid" ),
        text: $('#message-input').val()
    },
      //debug
      //onAjaxSuccess
    );

    $('#message-input').val('');
  } else {
    $('#message-input').attr("placeholder", "Введите сообщение для бота!");
  }
}
