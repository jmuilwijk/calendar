<?php
	require_once "delete.logic.php";
?>
	<h1>Delete person</h1>
	<p>Are you sure you want to delete:</p>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$birthday['id']?>">
			<label for="person">Name:</label>
			<span><?=$birthday['person']?></span>
		</div>
		<div>
			<label for="day">day:</label>
			<span><?=$birthday['day']?></span>
		</div>
		<div>
			<label for="month">month:</label>
			<span><?=$birthday['month']?></span>
		</div>
		<div>
			<label for="year">year:</label>
			<span><?=$birthday['year']?></span>
		</div>
		<div>
			<label></label>
			<input type="submit" name="confirmed" value="Yes">
			<input type="submit" name="canceled" value="No">
		</div>
	</form>