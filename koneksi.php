<?php 
 
$kon = mysqli_connect("localhost","root","wawan","warung");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
} else {
    echo "";
}
 
?>
