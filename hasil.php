<html>
<head>
<title> Hasil Perhitungan </title>
<style>
body{
	font-family: segoe ui;
}
.btn1{
	background: #ff0000;
	color: #ffffff;
	width: 30px;
}
.btn1:hover{
	background: #345ff2;
}
#wrapper{
	max-width:100%;
	width: 40%;
	height:auto;
	margin: auto;

}
#result{
	background: #3998ac;
	padding:4px;
	border-radius:20px;
}
.a1{
	text-decoration:underlined;
	color:#ffffff;
}
</style>
</head>
<body>
<?php
$nilai1 = $_POST['nilai1'];
$nilai2 = $_POST['nilai2'];
$hasil	= 0;

if (empty($nilai1) && empty($nilai2)) {
	//kalau username dan password kosong
	header('location:calc.php?error=1');
	break;
} else if (empty($nilai1)) {
	//kalau username saja yang kosong
	header('location:calc.php?error=2');
	break;
} else if (empty($nilai2)) {
	//kalau password saja yang kosong
	header('location:calc.php?error=3');
	break;
}

if(isset($_POST['tambah'])){
$hasil = $nilai1 + $nilai2;	
$op = " + ";
}
else if(isset($_POST['kurang'])){
$hasil = $nilai1 - $nilai2;	
$op = " - ";
}
else if(isset($_POST['kali'])){
$hasil = $nilai1 * $nilai2;	
$op = " x ";
}
else if(isset($_POST['bagi'])){
$hasil = $nilai1 / $nilai2;	
$op = " : ";
}
?>
<div id="wrapper">
<div id="result">
<h3 align="center">Hasil Perhitungan Kalkulator</h3>
<table border="0" align="center">
<tr>
<td>Nilai 1</td>
<td>:</td>
<td><?php echo $nilai1; ?></td>
</tr>
<tr>
<td>Nilai 2</td>
<td>:</td>
<td><?php echo $nilai2; ?></td>
</tr>
<tr>
<td>Hasil</td>
<td>:</td>
<td><?php echo $nilai1; echo $op; echo $nilai2; echo " = "; echo $hasil; ?></td>
</tr>
</table>
<p align="center"><a href="calc.php" class="a1">Klik Ke Halaman Utama</a></p>
</div>
</div>
</body>
</html>
