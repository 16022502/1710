<?php 
$id = $_GET['id'];
require_once 'lib.php';
$students = getStudents();

$currentStudent = null;
foreach ($students as $st) {
	if($st[0] == $id){
		$currentStudent = $st;
		break;
	}
}

if(!$currentStudent){
	header('location: index.php');
	die;
}

 ?>
 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="update_submit.php" method="post" >
		<input type="hidden" name="userId" value="<?php echo $currentStudent[0] ?>">
		Name: <input type="text" name="username" value="<?php echo $currentStudent[1] ?>" placeholder="">
		<br>
		Age: <input type="number" name="age" min="1" value="<?php echo $currentStudent[2] ?>" placeholder="">
		<br>
		School: <input type="text" name="school" value="<?php echo $currentStudent[3] ?>" placeholder="">
		<br>
		<button type="submit">Update</button>
	</form>
	
</body>
</html>