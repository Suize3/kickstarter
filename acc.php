<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<meta charset="utf-8">
<style type="text/css">
	.ml-600{
		margin-left: 583px;
	}
</style>
<form action="insertProject.php" method="POST">	
	<div class="form-group">
		<input type="" name="tittle" placeholder="Заголовок" class="form-control col-3 mx-auto">
	</div>
	<div class="form-group">
		<input type="" name="description" placeholder="Описание" class="form-control col-3 mx-auto">
	</div>
	<div class="form-group">
		<input type="" name="goal" placeholder="Необходима сумма(только сумма)" class="form-control col-3 mx-auto">
	</div>
	<div class="form-group">
		<input type="" name="img" placeholder="обложка" class="form-control col-3 mx-auto">
	</div>
	<div class="form-group">
		<input type="" name="place" placeholder="город" class="form-control col-3 mx-auto">
	</div>
	<div class="form-group">
		<input type="" name="user" placeholder="user" class="form-control col-3 mx-auto">
	</div>
	<button class="btn btn-success ml-600 col-3">Добавить</button>
</form>

<?php 
	$con = mysqli_connect('127.0.0.1', 'root','','kickstarter');
	$query = mysqli_query($con, "SELECT * FROM projects WHERE user='Tabletop Games'");
	$stroka = $query->fetch_assoc();

?>