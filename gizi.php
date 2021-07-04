<?php 
require '../fungsi.php';
$ambil= mysqli_query($koneksi, "SELECT * FROM gizi");
 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>layanan gizi</title>
 	<style type="text/css">
 		*{
 			margin: 0;
 			padding: 0;
 			font-family: sans-serif;
 		}
 		
  	a{
  		text-decoration: none;
  		color:red;

  	}
.a{
	text-align: center;
	background-color: #00FF00;
}
body{

	background-color: blue;
}


 	</style>
 </head>
 <body>
 	 <div class="a">
 	 <b><a href="../pasien/daftar.php">KEMBALI KE DAFTAR</a></b>||<b><a href="input.php">TAMBAH DATA</a></b> || <b><a href="../ruangan/ruangan.php">LAYANAN RUANGAN</a></b>
 	<hr>
 </div>
 <table border="1" cellspacing="0" cellpadding="10" width="100%">
 	<tr>
 		<th>NO</th>
 		<th>AKSI</th>
 		<th>Id Layanan</th>
 		<th>No Rm</th>
 		<th>Waktu Layanan</th>
 		<th>Diet</th>
 	</tr>
 	<?php $i=1; ?>
<?php while ($row= mysqli_fetch_assoc($ambil)): {

} ?>
 	<tr>
 		<td><?php echo $i; ?></td>
 		<td><a href="../hapus.php?no2=<?php echo $row['idlayanan']; ?>" onclick="return confirm('yakin ingin menghapus..?')">hapus</a> <=> <a href="edit.php?no2=<?php echo $row['idlayanan']; ?> ">ubah</a></td>
 		<td> <?php echo $row ['idlayanan']; ?> </td>
 		<td><?php echo $row ['norm']; ?></td>
 		<td><?php echo $row ['waktulayanan']; ?></td>
 		<td><?php echo $row ['diet']; ?></td>
 	</tr>
<?php $i++; ?>

 <?php endwhile; ?>

 </table>
 <center>
    <div class="container">

  <div class="r"><?php date_default_timezone_set("Asia/Jakarta");
echo date("d-M-Y H:i") ; ?></div>
 <div class="d"> <p>Reprogramed by Evita Rahmadona 2021</p> </div>
 
 </center>
 </body>
 </html>


