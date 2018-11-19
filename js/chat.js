var script_update_time = 1000;
var script_update_needed = false;
var need_hide = true;

//adding classes to main window
//$("#main-window").addClass("revealator-slideup revealator-position-within revealator-once");

//first messages loading
//UpdateMessages();
//autoupdate
setInterval(function(){
  if (script_update_needed) {
    UpdateMessages();
  }
}, script_update_time);

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
  $('#cache-window').load('partials/app.php?get_message=1');
  if ($('#cache-window').html() !== $('#main-window').html()){
    $('#main-window').load('partials/app.php?get_message=1');
    script_update_needed = false;
    setTimeout(function(){
      script_update_needed = true;
    }, 2000);
  }
  //$.post("stupid_bot.php");
}

//AJAX POST DEBUG function
function onAjaxSuccess(data)
{
  //alert(data);
}

//get cookie function
function get_cookie ( cookie_name )
{
  var results = document.cookie.match ( '(^|;) ?' + cookie_name + '=([^;]*)(;|$)' );

  if ( results )
  return ( unescape ( results[2] ) );
  else
  return null;
}

//send message function
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
      onAjaxSuccess
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
      onAjaxSuccess
    );

    hideMainWindow();

    $('#message-input').val('');
    setTimeout(function(){
      script_update_needed = true;
    }, 1000);
  } else {
    $('#message-input').attr("placeholder", "Введите сообщение для бота!");
  }
}

//hide main window function
function hideMainWindow() {
  if (need_hide == true){
    //revealator
    $("#main-window").removeClass("revealator-position-within");
    $("#main-window").removeClass("revealator-within");
    $("#main-window").addClass("revealator-position-partially-below");
    setTimeout(function(){
      $('#main-window').html('');
      $('#cache-window').html('');
    }, 1000);
    need_hide = false;
  }
}