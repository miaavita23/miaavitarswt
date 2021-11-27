<html>
<head>
	<style>
   li  {
	display:inline;
    }
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

li a:hover {
  background-color: #111;
}
active {
 background-color:#000080;
}

header {
 text-align:center;
 background-color:#808080;
}


article{
background-color:#C0C0C0;
}

footer{
text-align:center;
background-color:#808080;
}
 </style></head>
<body>
<header>
<h1> Pemrograman WEB  </h1>

  <ul>
  <li><a class="active" href="#Home.php">Home</a></li>
  <li><a href="daftar.php">Daftar</a></li>
  <li><a href="presensi.php">Presensi</a></li>
  <li><a href="rekap.php">Rekap</a></li>
  <li><a href="Index.php">Profil</a></li>

  </ul>
</header>
<section>
	
</head>
<body>

	<br/>
	<a href="daftar.php">+ TAMBAH MAHASISWA</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NIS</th>
			<th>NAMA DEPAN</th>
			<th>NAMA BELAKANG</th>
			<th>TEMPAT LAHIR</th>
			<th>TANGGAL LAHIR</th>
			<th>KELAMIN </th>
			<th>HOBBY</th>
			<th>ALAMAT</th>
		</tr>
		<?php
		$no = 1;
        $connect = mysqli_connect("localhost","root","","apitamia");
		$data = mysqli_query($connect,"select * from daftar");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['nis']; ?></td>
				<td><?php echo $d['nama_dpn']; ?></td>
				<td><?php echo $d['nama_blk']; ?></td>
				<td><?php echo $d['tpt_lahir']; ?></td>
				<td><?php echo $d['tgl_lahir']; ?></td>
				<td><?php echo $d['kelamin']; ?></td>
				<td><?php echo $d['hobby']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['nis']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['nis']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
<footer>
  <p> Created by Mia Avita R </p>
</footer>
</body>
</html>