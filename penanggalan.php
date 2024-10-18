<?php
//menampilkan tanggal
echo date("l, d-m-Y");
echo "<br/>";
echo date("l, d M Y");
echo "<br/>";

//memunculkan waktu
echo time();

echo "<br/>";
echo date("l, d M Y", time()+60*60*24*2);
?>