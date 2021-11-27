<html>
<head>
</head>
<body>
	<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}
header {
  text-align: center;
  background-color: #A9A9A9;
}
article {
  background-color: #696969;
  height: 400px;
  float: left;
  padding: 20px;
  width: 97%;
  background-color: #f1f1f1;
  height: 500px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: #808080;
  padding: 10px;
  text-align: center;
  color: white;
}

</style>
</head>
<body>
<header>
  <h1>PEMROGRAMAN WEB</h1>
<ul>
   <li><a class="active" href="home.php">Home</a></li>
  <li><a href="daftar.php">Daftar</a></li>
  <li><a href="presensi.php">Presensi</a></li>
  <li><a href="rekap.php">Rekap</a></li>
  <li><a href="Index.php">Profil</a></li>
</ul>
</ul>
</header>
<section>
<form action="tambahpresensi.php" method="POST">
	<h2> From Pendaftaran Anggota </h2>
  <label>NIS </label>
  <input type="text" name="nis_input"> <br> <br>
	<label> Nama Depan </label>
	<input type="text" name="namadepan_input"><br> <br>
    <label> Nama Belakang </label>
	<input type="text" name="namabelakang_input"><br> <br>

<label> Tempat Lahir </label>
<input list="kotalahir" name="tempatlahir_input">
  <datalist id="kotalahir">
  <option value="Kab Madiun">
  <option value="Kota Madiun">
  <option value="Kab Magetan">
  <option value="Kab Ngawi">
  <option value="Kab Bojonegoro">
  </datalist> <br> <br>

  <label> Tanggal Lahir </label>
  <input type="date" name="tanggallahir_input"><br> <br>

  <label> Jenis Kelamin </label>
  <input type="radio" name="jeniskelamin_input" id="Laki-Laki">
  <label> Laki-Laki </label>
  <input type="radio" name="jeniskelamin_input" id="Perempuan">
  <label> Perempuan </label><br> <br>

  <label> Hooby </label>
  <input type="checkbox" name="hooby_input[]"value="Olahraga">
  <label> Olahraga </label>
  <input type="checkbox" name="hooby_input[]"value="Membaca">
  <label> Membaca </label>
  <input type="checkbox" name="hooby_input[]"value="Traveling">
  <label> Traveling </label><br> <br>

  <label> Alamat </label>
  <textarea type="text" name="alamat_input" rows="3"> </textarea>
  <br>
  <br>
  <input type="Submit" value=" Simpan">
  <input type="Reset">
</form>
</section>
<footer>
	<p> Created by Mia XII RPL 2 </p>
</footer>
</body>
</html>