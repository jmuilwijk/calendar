<?php

	$db = new mysqli('localhost','root','','calendar');

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		$person = $db->escape_string($_POST["person"]);
		$month = $db->escape_string($_POST["month"]);
		$year = $db->escape_string($_POST["year"]);
		$day = $db->escape_string($_POST["day"]);

		$query ="INSERT INTO birthdays (person, month, day, year) VALUES ('$person', $month,$day,$year)";

		$result = $db->query($query);
	}

?>