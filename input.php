<?php 
require '../fungsi.php';
if (isset($_POST['kirim'])) {

	if (tambah($_POST) > 0) {
		echo "<script> 
alert('data berhasil ditambah');
document.location.href='daftar.php';
	</script>";
}

else{
		echo "<script> 
alert('data gagal ditambah');
document.location.href='input.php';
	</script>";
}
}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>tambah data</title>
 	<style type="text/css">
 		*{
 			margin: 0;
 			padding: 0;
 			font-family: sans-serif;
 		}
 		body{
 			background-color: skyblue;
 		}

 		table{
 			padding: 2%;
 		}
 		button{
 			color: white;
 			background-color: blue;
 		}
 		a{
 			text-decoration: none;
 			color: white;
 		}

 	</style>
 </head>
 <body>
 <center>
 	<form action="" method="POST">
 <table>
<tr>
	<td>No RM</td>
	<td><input type="text" name="a" maxlength="10" required autofocus autocomplete="off"></td>
</tr>
<tr>
 		<td>No Id Pasien</td>
 		<td><input type="text" name="b" maxlength="20" required autocomplete="off"></td>
 </tr>
 <tr>
 		<td>Jenis Id</td>
 		<td> <select name="c" >
 			<option>KTP</option>
 			<option>SIM</option>
 			<option>Pasport</option>
 			<option>lainnya</option>
 		</select></td>
 </tr>
 <tr>
 		<td>Nama Pasien</td>
 		<td><input type="text" name="d" maxlength="50" required autocomplete="off"></td>
 </tr>
 <tr>
 		<td>Alamat</td>
 		<td><input type="text" name="e" maxlength="100" required autocomplete="off"></td>
 </tr>
 <tr>
 		<td>Agama</td>
 		<td><select name="f">
 			<option>Islam</option>
 			<option>Kristen</option>
 			<option>Katolik</option>
 			<option>Hindu</option>
 			<option>Budha</option>
 			<option>Konghucu</option>
 		</select></td>
 </tr>
 <tr>
 		<td>Golongan Darah</td>
 		<td>
 			<select name="g">
 				<option>A</option>
 				<option>B</option>
 				<option>AB</option>
 				<option>O</option>
 			</select>
 		</td>
</tr>
<tr>

 		<td>Tanggal Lahir</td>
 		<td><input type="date" name="h" required></td>
</tr>
<tr>
 		<td>Jenis Kelamin</td>
 		<td>
 			<select name="i">
 				<option>Laki-laki</option>
 				<option>Perempuan</option>
 			</select>
 		</td>
</tr>

 		<td><input type="hidden" name="j" value="<?php date_default_timezone_set("Asia/Jakarta");
echo date("d-M-Y H:i") ; ?>"></td>
<td><button type="submit" name="kirim">Tambah</button> || <button > <a href="daftar.php">Kembali</a></button></td>
</tr>
   <div class="d"> <p>Reprogramed by Evita Rahmadona 2021</p> </div>
     <div class="r"><?php date_default_timezone_set("Asia/Jakarta");
echo date("d-M-Y H:i") ; ?></div>

 </table>
 </form>
</center>
 </body>
 </html>