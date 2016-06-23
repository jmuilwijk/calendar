<head>
	<?php require_once "edit.logic.php";?>
	<title>Verjaardagskalender</title>
    <link href="common/main.css" rel="stylesheet" type="text/css">
</head>
	<h1>Edit <?=$birthday['person']?></h1>
	<form method="post">			
		<table>
			<label for="name">Name:</label>
			<input type="text" id="person" name="person" value="<?=$birthday['person']?>"><br>
		
			<label for="name">day:</label>
			<input type="text" id="day" name="day" value="<?=$birthday['day']?>"><br>
		
			<label for="name">month:</label>
			<input type="text" id="month" name="month" value="<?=$birthday['month']?>"><br>
		
			<label for="name">year:</label>
			<input type="text" id="year" name="year" value="<?=$birthday['year']?>"><br>

			<input type="submit" value="Save">		
			<button type=""<a href="index.php"></a>Cancel</button>
		</table>
	</form>