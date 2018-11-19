 <?php

	//melakukan koneksi kedalam server 
	$connect = mysqli_connect("localhost","root","") or die ("connectiing server failed".mysqli_error());
	
	//melakukan pilihan ke database
	mysqli_select_db($connect, "mitla") or die ("database failed".mysqli_error());
?>