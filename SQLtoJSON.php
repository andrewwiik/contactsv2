<!-- Using this file to parse the mySQL table to JSON file -->
<?php
//Set variabloes and locations for the connection.
$hostname = "localhost";
$user = "bentouss_testing";
$pass = "b3ntoussi";
$database = "bentouss_testing";
//connection string and die if fails
mysql_connect("$hostname", "$user", "$pass") or die(mysql_error());
mysql_select_db("$database") or die(mysql_error());

$sql = "select * from teamList";

$result = mysql_query($sql);
$json = array();
if(mysql_num_rows ($result)) {
	while ($row = mysql_fetch_row($result)) {
		$json[] = array('name' => $row['name'], 'founded' => $row['founded']);
	}
}
//echo json_encode($json);
echo json_encode($json);
mysql_close();
?>
