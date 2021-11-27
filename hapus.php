<?php 
include 'koneksi.php';
 
$nis = $_GET['id'];
 
$queri=mysqli_query($connect,"delete from daftar where nis='$nis'");

if($queri){
	echo '<script>alert("Data berhasil dihapus.Terimakasih.")</script>';
	header("location:presensi.php");
	exit;
} else {
	echo mysqli_error($connect);
	echo '<script>alert("Data GAGAL dihapus")</script>';
	exit;
}
 
 
?>