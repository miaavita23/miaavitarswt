<?php 
include 'koneksi.php';
 
$nis=$_POST['nisinput'];
$namadepan=$_POST['namadepan_input'];
$namabelakang=$_POST['namabelakang_input'];
$tempatlahir=$_POST['tempatlahir_input'];
$tanggallahir=$_POST['tanggallahir_input'];
$kelamin=$_POST['kelamin_input'];
$hobby=implode(",", $_POST['hobbyinput']);
$alamat=$_POST['alamatinput'];

 
$queri=mysqli_query($connect,"update daftar set nis='$nis', nama_dpn='$namadepan', nama_blk='$namabelakang', tpt_lahir='$tempatlahir', tgl_lahir='$tanggallahir', kelamin='$kelamin', hobby='$hobby', alamat='$alamat'  where nis='$nis'");

if($queri){
	echo '<script>alert("Data berhasil diuptade.Terimakasih.")</script>';
	header("location:presensi.php");
	exit;
} else {
	echo mysqli_error($connect);
	echo '<script>alert("Data GAGAL diuptade")</script>';
	exit;
}
 

 
?>

