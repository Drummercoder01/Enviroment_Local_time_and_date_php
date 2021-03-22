<?php
$_output="";

$_output.="<br/>Enviromentlocale : 'NULL'<br/>";

$_output.= strftime("%A %d %B %Y %H:%M:%S");
$_output.= '<br/><br/>';

setlocale(LC_ALL, 'fr_FR');
$_output.= "<br/>Enviromentlocale : 'fr_FR'<br/>";
$_output.= strftime("%A %d %B %Y %H:%M:%S");
$_output.= '<br/><br/>';

setlocale(LC_ALL, 'nl_NL');
$_output.= "<br/>Enviroment locale : 'nl_NL'<br/>";
$_output.= strftime("%A %d %B %Y %H:%M:%S");
$_output.='<br/><br/>';

setlocale(LC_ALL, NULL);
$_output.= "<br/>Enviromentlocale : 'NULL'<br/>";

$_output.= strftime("%A %d %B %Y %H:%M:%S");
echo $_output;
?>
