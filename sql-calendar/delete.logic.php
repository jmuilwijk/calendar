<?php 
$db = new mysqli('localhost','root','','calendar');
			$id = $db->escape_string($_GET["id"]);
			
			$query = "SELECT * FROM birthdays WHERE id=$id";
			$result = $db->query($query);
		
			$birthday = $result->fetch_assoc();

			if($_SERVER["REQUEST_METHOD"] == "POST"){

			$query = "DELETE FROM birthdays where id=$id";
			$result = $db->query($query);

			header("Location: ./");}
