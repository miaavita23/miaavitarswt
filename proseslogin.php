<?php
 $user=$_POST['userinput'];
 $pass=$_POST['passinput'];
 $koneksi=mysqli_connect('localhost','root','','db_miaavita_12rpl2');
 $kueri=mysqli_query($koneksi,"SELECT * FROM user WHERE username='$user' AND password='$pass'");
 $cek=mysqli_num_rows($kueri);

 if($cek>0) {
     header("location:menu/home 1.html");
 } else {
     header("location:index.php");
 }
 

 /**
 if (!$koneksi) {
 	die("DATABASE TIDAK TERKONEKSI");
 }
echo "DATABASE TERKONEKSI";
*/


?>