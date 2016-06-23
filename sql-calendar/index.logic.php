<?php 
	$db = new mysqli('localhost','root','','calendar');

	$query = "SELECT * FROM birthdays ORDER BY month";
	$result = $db->query($query);
	$birthdays = $result->fetch_all(MYSQLI_ASSOC);

	$curMonth = null;
    $curDay = null;
    $id = null;

    $month = array("Januari", "Februari", "Maart", "April", "Mei", "Juni", "Juli", "Augustus", "September", "Oktober", "November", "December");
