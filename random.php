<?php ?><?php
$urlist = file("monsters_trick.txt");
$nl = count($urlist);
$np = rand(0, $nl - 1);
$url = trim($urlist[$np]);
header("Location: $url");
exit;
?>