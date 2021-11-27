<!DOCTYPE html>
<html>
<head>
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
  background-color: #5F9EA0;
  height: 400px;
  float: left;
  padding: 20px;
  width: 97%;
  background-color: #5F9EA0;
  height: 350px; /* only for demonstration, should be removed */
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
  padding: 15px;
  text-align: center;
  color: white;
  height: 50px;
}

</style>
</head>
<body>
<header>
  <h1>PEMROGRAMAN WEB</h1>
<ul>
  <li><a class="active" href="#Home.php">Home</a></li>
  <li><a href="daftar.php">Daftar</a></li>
  <li><a href="presensi.php">Presensi</a></li>
  <li><a href="rekap.php">Rekap</a></li>
  <li><a href="Index.php">Profil</a></li>
</ul>
</ul>
</header>
<section>
  <article>
    <img src="komputer12.jpg" width="300">
    <h1>Pemrograman Web</h1>
    <p>Pemrograman web terbentuk atas 2 kata yaitu pemrograman dan web dimana pemrograman sendiri adalah Proses atau Cara dalam menjalankan sebuah urutan intruksi atau perintah yang diberikan kepada komputer untuk membuat fungsi atau tugas tertentu. dan Web adalah Sistem untuk mengakses, memanipulasi, dan mengunduh dokumen yang terdapat pada komputer yang di hubungkan melalui internet atau jaringan. Jadi Pemrograman Web adalah Proses atau Cara untuk menjalankan intruksi pada sebuah komputer yang terhubung ke internet untuk membuat fungsi atau tugas tertentu. dan dalam menjalanan sebuah program di dalam web itu melaui web browser seperti : mozilla, Opera, Chrome, dll..</p>
  </article>
</section>
<footer>
  <p>Created by MIA AVITA R <br> XII RPL 2</p>
</footer>
</body>
</html>