<h1><?php echo $pageData['title']; ?></h1>
<div class="task-item">
	Task:<br>
	<?php echo $pageData['description']; ?>
</div>
<div class="task-item">
	Input:<br>
	<form name="inputDataForm" method="post">
		<textarea name="inputDataText" rows="10" cols="70"></textarea><br>
		<input type="submit" value="Submit Data">
		<input type="reset" value="Reset Data">
	</form>
	<?php   print_r($pageData['inputData']); ?>
</div>
<div class="task-item">
	Output:<br>
	<?php echo $pageData['result']; ?>
</div>
<div class="task-item">
	Code:<br>
	...
</div>
