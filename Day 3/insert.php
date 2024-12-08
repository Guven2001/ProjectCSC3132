<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inserting To Table</title>
</head>
<body>
	<form action="insert.php" method="POST">
		<table>
        <tr>
				<td align="right">ID:</td>
				<td><input type="number" name="id" /></td>
			</tr>
			<tr>
				<td align="right">Registration Number:</td>
				<td><input type="text" name="regno" /></td>
			</tr>
			<tr>
				<td align="right">Name:</td>
				<td><input type="text" name="name" /></td>
			</tr>
			<tr>
				<td align="right">Age:</td>
				<td><input type="number" name="age" /></td>
			</tr>
			<tr>
				<td align="right">Course:</td>
				<td>
					<select name="course">
						<option value="IT">IT</option>
						<option value="AMC">AMC</option>
						<option value="CS">CS</option>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="Submit" value="Add a new Student" /></td>
			</tr>
		</table>
	</form>
	<?php
	require_once 'dbconf.php';
	function Insert($connect,$id,$reg,$name,$age,$course){
		try {
		//Query
			$sql = "INSERT INTO students VALUES('$id','$reg','$name',$age,'$course')";
			//echo "$sql";
		//excute the quey
			$result = mysqli_query($connect,$sql);
			if ($result) {
				echo "New student record created sucessfully";
			} else {
				die("Error ".mysqli_error($connect));
			}

		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
    PrintTable("students",$connect);
	
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		//echo "Got the POST request from client";
        $id = $_POST['id'];
		$reg = $_POST['regno'];
		$name = $_POST['name'];
		$age = $_POST['age'];
		$course = $_POST['course'];
		Insert($connect,$id,$reg,$name,$age,$course);
	}
	
	?>

</body>
</html>