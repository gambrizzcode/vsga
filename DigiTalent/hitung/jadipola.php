<?php

$angka = $_POST["angka"] == "" ? 0 : $_POST["angka"];
$pola  = $_POST["pola"];

// segitiga
for ($i=1; $i <= $angka ; $i++) {
	for ($j=1; $j <= $i ; $j++) { 
		echo "*";
	}
	echo "<br>";
}


//pyramid
echo"<p align='center'>";
    for($i=0;$i<=$angka;$i++){
       for($a=$i;$a>=0;$a--){
         print('*');
       }
    echo"<br/>";
   }
 echo"</p>";

//belah ketupat
echo"<p align='center'>";
    for($i=0;$i<=$angka;$i++){
       for($a=$i;$a>=0;$a--){
         print('*');
       }
    echo"<br/>";
   }
  for($i=0;$i<=$angka-1;$i++){
    for($a=$i;$a<=$angka-1;$a++){
      print('*');
    }
  echo"<br/>";
  }
 echo"</p>";

?>