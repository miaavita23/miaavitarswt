<html>
<head>
    <style type="text/css">
    table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

</style>
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
  <li><a class="active" href="#Home.php">Home</a></li>
  <li><a href="daftar.php">Daftar</a></li>
  <li><a href="presensi.php">Presensi</a></li>
  <li><a href="Rekap.php">Rekap</a></li>
  <li><a href="Index.php">Profil</a></li>
</ul>
</ul>
</header>
<section>

</head>
<body>
 <table border="1">
  <h2> Rekap Absen </h2>
   <tr bgcolor="green">
     <th rowspan="2">No </th>
     <th width="200" rowspan="2">Nama </th>
     <th rowspan="2"> JK </th>
     <th colspan="4">September</th>
   </tr>

   <tr bgcolor="green">
   	<th>1</th>
   	<th>2</th>
   	<th>3</th>
   	<th>4</th>
   </tr>

   <tr bgcolor="#7FFF00">
     <td> 1 </td>
     <td>Anam </td>
     <td>Laki-Laki </td>
     <td> H </td>
     <td> H </td>
     <td> S </td>
     <td> H </td>
  </tr>

  <tr bgcolor="#7FFF00">
    <td>2</td>
    <td>Susanti</td>
    <td>Perempuan</td>
    <td> H </td>
    <td> H </td>
    <td> S </td>
    <td> H </td>
  </tr>

  <tr bgcolor="#7FFF00">
    <td>3</td>
    <td>Susanto</td>
    <td>Laki-Laki</td>
    <td> H </td>
    <td> H </td>
    <td> S </td>
    <td> H </td>
  </tr>
</section>
</table>
</body>
<footer>
	<p> Created by Mia XII RPL 2 </p>
</footer>
</html>