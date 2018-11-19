<?php 

//$ajax_modal = "<div class=\"container position-absolute text-right revealator-slidedown\" style=\"z-index: 1;\"><a class=\"nav-link\" href=\"#\" data-toggle=\"modal\" data-target=\"#ajaxModal\" onclick=\"$(\'#ajax-Modal-Body\').load(\'partials/calc.html\');\">Calc</a></div>";

$ajax_modal = "<a href=\"partials/calc.html\" class=\"btn btn-primary\" href=\"#\">Calc</a>";

//$('#main-window').load('partials/calc.html');

$text_to_db = str_replace(" не ", "не <a href=\'#\' class=\'btn btn-info\'>не</a> ", $text_to_db);
$text_to_db = str_replace(" ты ", "ты <a href=\'#\' class=\'btn btn-info\'>ты</a> ", $text_to_db);
$text_to_db = str_replace("понятно.", "понятно.<br>".$ajax_modal	, $text_to_db);
$text_to_db = str_replace("другому.", "другому.<br>".$ajax_modal, $text_to_db);
$text_to_db = str_replace("ты.", "ты.<br>".$ajax_modal, $text_to_db);

?>