<?php
$connection =mysql_connect($server.":".$port,$user,$password,true);
$db=mysql_select_db($database,$connection);


?>