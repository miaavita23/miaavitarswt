<!DOCTYPE html>
<html>
<head>
  <title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
 
  <h2>CRUD DATA MAHASISWA - WWW.MALASNGODING.COM</h2>
  <br/>
  <a href="presensi.php">KEMBALI</a>
  <br/>
  <br/>
  <h3>EDIT DATA MAHASISWA</h3>
 
  <?php
  include 'koneksi.php';
  $nis = $_GET['id'];
  $data = mysqli_query($connect,"select * from daftar where nis='$nis'");
  while($d = mysqli_fetch_array($data)){
    ?>
    <form method="post" action="update.php">
  <label> NIS </label>
  <input type="text" name="nisinput" value="<?php echo $d['nis']; ?>"><br> <br>
  <label> Nama Depan </label>
  <input type="text" name="namadepan_input" value="<?php echo $d['nama_dpn']; ?>"><br> <br>
  <label> Nama Belakang </label>
  <input type="text" name="namabelakang_input" value="<?php echo $d['nama_blk']; ?>"><br> <br>
  <label> Tempat lahir </label>
  <select name="tempatlahir_input">
    <?php
    $Madiun = "";
    if($d['tpt_lahir'] == "Kab Madiun"){
    $Madiun = 'checked';
  }
  ?>
    <option value="kabmadiun"> Kab Madiun </option>
    <?php
    $Madiun = "";
    if($d['tpt_lahir'] == "Kota Madiun"){
    $Madiun = 'checked';
  }
  ?>
    <option value="kotamadiun"> Kota Madiun </option>
    <?php
    $Magetan = "";
    if($d['tpt_lahir'] == "Kab Magetan"){
    $Magetan = 'checked';
  }
  ?>
    <option value="kabmagetan"> Kab magetan </option>
    <?php
    $Ngawi = "";
    if($d['tpt_lahir'] == "Kab Ngawi"){
    $Ngawi = 'checked';
  }
  ?>
    <option value="kabngawi"> Kab Ngawi </option>
    <?php
    $Bojonegoro = "";
    if($d['tpt_lahir'] == "Kab Bojonegoro"){
    $Ngawi = 'checked';
  }
  ?>
    <option value="kabbojonegoro"> Kan Bojonegoro </option>
  </select><br> <br>

  <label> Tanggal Lahir </label>
  <input type="date" name="tanggallahir_input" value="<?php echo $d['tgl_lahir']; ?>"><br> <br>
   
  <label> Jenis Kelamin </label>
  <?php
    $laki = "";
    if($d['kelamin'] == "Laki-laki"){
    $laki = 'checked';
  }
  ?>
  <input type="radio" name="kelamin_input" value="Laki-laki" <?php echo $laki ?>>
  <label> Laki-laki </label>
  <?php
    $perempuan = "";
    if($d['kelamin'] == "Perempuan"){
    $perempuan = 'checked';
  }
  ?>
  <input type="radio" name="kelamin_input" value="Perempuan" <?php echo $perempuan ?>>
  <label> Perempuan </label><br> <br>

  <label> Hobby : </label>
  <?php
    $olahraga = "";
    if($d['hobby'] == "Olahraga"){
    $olahraga = 'checked';
  }
  ?>
  <input type="checkbox" name="hobbyinput[]" value="Olahraga" <?php echo $olahraga ?>>
  <label> Olahraga </label>
  <?php
    $membaca = "";
    if($d['hobby'] == "Membaca"){
    $membaca = 'checked';
  }
  ?>
  <input type="checkbox" name="hobbyinput[]" value="Mambaca" <?php echo $membaca ?>>
  <label> Membaca </label>
  <?php
    $travelling = "";
    if($d['hobby'] == "Travelling"){
    $travelling = 'checked';
  }
  ?>
  <input type="checkbox" name="hobbyinput[]" value="Travelling" <?php echo $travelling ?>>
  <label> Traveling </label><br> <br>

  <label> Alamat </label>
  <input type="textarea" name="alamatinput" roys="3" value="<?php echo $d['alamat']; ?>"><br> <br>

  <input type="submit">

 </form>
    <?php 
  }
  ?>
 
</body>
</html>c