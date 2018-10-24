<?php

$link = mysql_connect("localhost", "steamcas_easy", "BD124218BD124218");
mysql_select_db("steamcas_easy", $link);

mysql_query("DELETE FROM test", $link);
mysql_close();
header('Location: menu.php');
?>