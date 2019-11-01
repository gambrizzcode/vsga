<?php
$jml = $_POST['jml'];

echo "<form method='post' action='yuhu.php'>";
echo "<input type='hidden' name='jumlah' value='".$jml."'";
for ($i=0; $i <= $jml; $i++) { 
	echo "<input type='text' name='mas".$i."' placeholder='Masukan angka ke '".$i."'>";
}
echo "<input type='submit' name='submit2' value='MUNCULKAN'>";
echo "</form>";