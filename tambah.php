<!DOCTYPE html>
<html>
<head>
	<title>CRUD </title>
</head>
<body>
	
	<p><a href="index.php">Home</a> </p>
	
	<h3>Add Data</h3>
	
	<form action="tambah-proses.php" method="POST">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>ID</td>
				<td>:</td>
				<td><input type="text" name="id" required></td>
			</tr>
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input type="text" name="name" size="30" required></td>
			</tr>
			
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="add" value="Add"></td>
			</tr>
		</table>
	</form>
</body>
</html>