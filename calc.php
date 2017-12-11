<html>
<head>
<title> Aplikasi Kalkulator PHP </title>
<style>
body{
	font-family: segoe ui;
}
.btn1{
	margin-top:10px;
	background: #ff0000;
	color: #ffffff;
	width: 30px;
	-webkit-transition-duration: 0.4s;
	border:none;
	padding: 5px 5px;
	font-size:18px;
	border-radius:6px;
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
#app{
	background: #3ff435;
	padding:4px;
	border-radius:20px;
}
#result{
	background: #3998ac;
}
input{
	padding-left:4px;
	font-family: segoe ui;
}
</style>
</head>
<body>
<div id="wrapper">
<div id="app">
<center>
<h3>Apllikasi Kalkulator PHP</h3>
<form action="hasil.php" method="post">
<table border="0">
<tr>
<td>Nilai 1</td>
<td><input type="number" name="nilai1"/></td>
</tr>
<tr>
<td>Nilai 2</td>
<td><input type="number" name="nilai2"/></td>
</tr>
<tr>
<td colspan="2" align="right">
<input type="submit" name="tambah" value="+" class="btn1">
<input type="submit" name="kurang" value="-" class="btn1">
<input type="submit" name="kali" value="x" class="btn1">
<input type="submit" name="bagi" value=":" class="btn1">
</td>
</tr>
</table>
</form>
</center>
<p align="center">
<?php 
//kode php ini kita gunakan untuk menampilkan pesan eror
if (!empty($_GET['error'])) {
	if ($_GET['error'] == 1) {
		echo '<h3 align=center>Nilai 1 dan Nilai 2 belum diisi!</h3>';
	} else if ($_GET['error'] == 2) {
		echo '<h3 align=center>Nilai 1 belum diisi!</h3>';
	} else if ($_GET['error'] == 3) {
		echo '<h3 align=center>Nilai 2 belum diisi!</h3>';
	}
}
?>
</p>
</div>
</div>
</body>
</html>