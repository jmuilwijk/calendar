<?php 
	require'create.logic.php';
?>

	<h1>New record</h1>
	<form method="post">
		<div>
			<label for="person">Name:</label>
			<input type="text" id="person" name="person">
		</div>
		<div>
			<label for="day">day:</label>
			<input type="number" id="day" name="day">
		</div>
		<div>
			<label for="month">month:</label>	
			<select for="month" id="month" name="month">
				<option value="1">januari</option>
				<option value="2">februari</option>
				<option value="3">maart</option>
				<option value="4">april</option>
				<option value="5">mei</option>
				<option value="6">juni</option>
				<option value="7">juli</option>
				<option value="8">augustus</option>
				<option value="9">september</option>
				<option value="10">oktober</option>
				<option value="11">november</option>
				<option value="12">december</option>
			</select>
		</div>
		<div>
			<label for="year">year:</label>
			<input type="number" id="year" name="year">
		</div>
		<div>
			<input type="submit">
		</div>       