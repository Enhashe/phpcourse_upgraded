<h1><?php echo $pageData['title']; ?></h1>
<div class="task-item">
	Task:<br>
	<?php echo $pageData['description']; ?>
</div>
<div class="task-item">
	Input:<br>
<<<<<<< HEAD
	<form name="inputDataForm" method="post">
		<textarea name="inputDataText" rows="10" cols="70"></textarea><br>
		<input type="submit" value="Submit Data">
		<input type="reset" value="Reset Data">
	</form>
	<?php   print_r($pageData['inputData']); ?>
=======
	<form method="post">
		Test text field:<br>
  		<input type="text" name="login" value="User"><br>
  		<input type="password" name="password"><br>
  		Your gender:<br>
  		<input type="radio" name="gender" value="male"> Male<br>
  		<input type="radio" name="gender" value="female"> Female<br>
  		<input type="radio" name="gender" value="other" checked> Other<br>
		Your car<br>
		<select name="car">
			<option value="volvo">Volvo</option>
			<option value="saab">Saab</option>
			<option value="fiat">Fiat</option>
			<option value="audi">Audi</option>
		</select><br>
  		<input type="submit" value="Submit">
	</form>
	<?php echo $pageData['inputData']; ?>
>>>>>>> Lection
</div>
<div class="task-item">
	Output:<br>
	<?php echo $pageData['result']; ?>
</div>
<div class="task-item">
	Code:<br>
	...
</div>
