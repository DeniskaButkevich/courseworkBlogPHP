<?php
require_once "functions.php";
// Make the script run only if there is a page number posted to this script
if(isset($_POST['pn'])){
	$rpp = preg_replace('#[^0-9]#', '', $_POST['rpp']);
	$last = preg_replace('#[^0-9]#', '', $_POST['last']);
	$pn = preg_replace('#[^0-9]#', '', $_POST['pn']);
	// This makes sure the page number isn't below 1, or more than our $last page
	if ($pn < 1) { 
    	$pn = 1; 
	} else if ($pn > $last) { 
    	$pn = $last; 
	}
	// Connect to our database here
	connectDB();
	// This sets the range of rows to query for the chosen $pn
	$limit = 'LIMIT ' .($pn - 1) * $rpp .',' .$rpp;
	// This is your query again, it is for grabbing just one page worth of rows by applying $limit
	$sql = "SELECT id, title, intro_text FROM news $limit";
	$query = mysqli_query($mysql_connect, $sql);
	$dataString = '';
	while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
		$id = $row["id"];
		$title = $row["title"];
		$intro_text = $row["intro_text"];
		$dataString .= $id.'|'.$title.'|'.$intro_text.'||';
	}
	// Close your database connection
    closeDB();
	// Echo the results back to Ajax
	echo $dataString;
	exit();
}
?>