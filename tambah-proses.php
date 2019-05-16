<?php
require_once("koneksi.php");
if(isset($_POST['add'])){
	
	//echo "aaa";
	//include('koneksi.php');
	
	
	$id		= $_POST['id'];	
	$name	= $_POST['name'];		
	
	/*
	$input = mysqli_query($koneksi,"INSERT INTO User VALUES('$id', '$name')") or die(mysqli_error());
	
	
	if($input){
		
		echo 'Data berhasil di tambahkan! ';		
		echo '<a href="tambah.php">Kembali</a>';	
		
	}else{
		
		echo 'Gagal menambahkan data! ';		
		echo '<a href="tambah.php">Kembali</a>';	
		
	}*/
	
	$tsql = "INSERT INTO [User] (ID, Name) OUTPUT INSERTED.Name VALUES ('$id', '$name')";
     //Insert query
     $insertReview = sqlsrv_query($koneksi, $tsql);
     if ($insertReview == false) {
         die(FormatErrors(sqlsrv_errors()));
     }
     
	 
	 echo '<h1>Success add data</h1>';
	 echo '<h2> Product Key inserted is : ';
	
     while ($row = sqlsrv_fetch_array($insertReview, SQLSRV_FETCH_ASSOC)) {
         echo($row['Name']);
     }
     sqlsrv_free_stmt($insertReview);
	 
	 echo '</h2>';
	 
	 echo '<a href="index.php">Back</a>';	

}else{	

	//echo "bbbb";
	echo '<script>window.history.back()</script>';

}

function FormatErrors($errors)
    {
        /* Display errors. */
        echo "Error information: <br/>";
     
        foreach ($errors as $error) {
            echo "SQLSTATE: ".$error['SQLSTATE']."<br/>";
            echo "Code: ".$error['code']."<br/>";
            echo "Message: ".$error['message']."<br/>";
        }
    }
?>