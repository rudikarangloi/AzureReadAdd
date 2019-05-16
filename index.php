<?php
require_once("koneksi.php");


?>

<html>
<head>
	<title>LIST DATA</title>
</head>
<body>
	<h2>LIST DATA</h2>
	
	
	<p><a href="index.php">Home</a> / <a href="tambah.php">Add Data</a></p>
	
		
	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#CCCCCC">
			<th>No.</th>
			<th>ID</th>
			<th>Name</th>		
		</tr>
	
		<?php
		 $tsql = "SELECT * FROM [User] ORDER BY ID";
		 //Executes the query
		 $getData = sqlsrv_query($koneksi, $tsql);
		 //Error handling
		 if ($getData == false) {
			 die(FormatErrors(sqlsrv_errors()));
		 }
		 $productCount = 0;
		 $ctr = 0;
		 ?> 
		
		 <?php
		 while ($row = sqlsrv_fetch_array($getData, SQLSRV_FETCH_ASSOC)) {
			 //if ($ctr>90) {
			//	 break;
			 //}
			 $ctr++;
			 ?>
			  <tr>
		  
				<td><?php echo $ctr; ?></td>
				<td><?php echo $row["ID"]; ?></td>
				<td><?php echo $row["Name"]; ?></td>
				
			  </tr>
			<?php
			
			 $productCount++;
		 }
		 sqlsrv_free_stmt($getData);
		?>
	</table>
		
	
</body>
</html>
