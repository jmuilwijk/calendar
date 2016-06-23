<?php
	$db = new mysqli('localhost','root','','calendar');
	$id = $db->escape_string($_GET["id"]);

	$query ="SELECT * FROM birthdays WHERE id=$id";
	$result = $db->query($query);	
	$birthday = $result->fetch_assoc();

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$person = $db -> escape_string($_POST['person']);
			$day = $db -> escape_string($_POST['day']);
			$month = $db -> escape_string($_POST['month']);
			$year = $db->escape_string($_POST["year"]);

			$query = "UPDATE birthdays SET person='$person', day='$day', month='$month', year='$year' WHERE id=$id";
			$result = $db->query($query);
			header("Location: index.php");
	}
?>
