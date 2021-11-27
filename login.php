<?php
 $user=$_POST['userinput'];
 $pass=$_POST['passinput'];
 $connect= mysqli_connect('localhost','root','','apitamia');
 $kueri=mysqli_query($connect,"SELECT * FROM user WHERE username='$user' AND password='$pass' ");
 $cek=mysqli_num_rows($kueri);

 if ($cek>0) {
 header("location:menu/login.php");
 } else{
   header("location:home.php");
 }


 /**
 if (!$koneksi) {
   die("DATABASE TIDAK TERKONEKSI");
 }
 echo "DATABASE TERKONEKSI";
 */

?>