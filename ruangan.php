<?php 
require '../fungsi.php';

$ambil= mysqli_query($koneksi, "SELECT * FROM ruangan");
 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>ruangan</title>
 	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <style type="text/css">
*{
	margin: 0;
	padding:0;
	font-family: sans-serif;
}

  	a{
  		text-decoration: none;
  		color: red;

  	}
.a{
	text-align: center;
	background-color: #00ff00;
}


body{
	background-color: blue;

}
  </style>
 </head>
 <body> 
 	 <div class="a">
 	<b><a href="../pasien/daftar.php">KEMBALI KE DAFTAR</a></b> || <b><a href="input1.php">TAMBAH DATA</a></b> || <b><a href="../gizi/gizi.php">LAYANAN GIZI</a></b>
 	<hr></div>
 	 <center>
 <table border="1" cellspacing="0" cellpadding="10" width="100%"> 
 	<tr>
 		<th>NO</th>
 		<th>Aksi</th>
 		<th>No Ruangan</th>
 		<th>No RM</th>
 		<th>Waktu Masuk</th>
 		<th>Waktu Keluar</th>
 	
 	</tr>
 	<tr>
 		<?php $i=1; ?>
 		<?php while ($row=mysqli_fetch_assoc($ambil)): {
 		} ?>
 		<td><?php echo $i;; ?></td>
 		<td><a href="../hapus.php?no1=<?php echo $row['noruangan']; ?>" onclick="return confirm('yakin ingin menghapus..?')">hapus</a> <=> <a href="edit.php?no1=<?php echo $row['noruangan']; ?> ">ubah</a></td>
 		<td> <?php echo $row['noruangan']; ?></td>
 		<td><?php echo $row['norm']; ?></td>
 		<td><?php echo $row['waktumasuk']; ?></td>
 		<td><?php echo $row['waktukeluar']; ?></td>
 	</tr>
 	<?php $i++; ?>
 <?php endwhile; ?>
 </table></center>
 </div>
 </body>
 </html>