<?php
//cara lama
$arr1 = array("senin", "Selasa", "Rabu");
//cara baru
$arr2 = ["Senin", "Selasa", "Rabu", "kamis", "jumat"];

//echo hanya bekerja untuk string / int
//khusus debugging / depeloper
//var_dump // print_r untuk array
  //  var_dump($arr2);
//echo "<br/>";
//print_r($arr2);
//echo "<br/>";
//echo $arr2[1];

//cara 1
for($i = 0; $i < count($arr2); $i++){
    echo $arr2[$i] . "<br/>";
}

echo "<br/>";

//cara2
foreach($arr2 as $hari){
    echo $hari . "<br/>";
}
?>