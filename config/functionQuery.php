<?php
include "connection.php";

function autoQuery($table,$column){
	$q=mysql_query("select * from $table order by $column");
	return $q;
}
?>