<?php
$jumlah = $_POST['jumlah'];
for ($j=1; $j <= $jumlah; $j++) { 
	echo $_POST['mas'.$j]."<br>";
}