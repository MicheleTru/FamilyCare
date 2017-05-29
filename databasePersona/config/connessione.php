<?php

$link = mysql_connect('10.0.0.102', '5a_dilorenzim', 'dilorenzim');
if (!$link) {
    die('Not connected : ' . mysql_error());
}

// make foo the current db
$db_selected = mysql_select_db('5a_dilorenzim', $link);
if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}
?>

