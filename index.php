<?php
$string1 = "Radianti Novita";
$string2 = "(pakai variable terpisah)";

echo $string1 . ' ' . $string1;

echo 12 + 8 . "\n"; // integer

echo "12" + 8 . "\n"; //string
//secara default string di convert ke int oleh php
//bukan cara yang rekomendasi

$x = 5;
$y = 10;

$hasil = $x * $y;

echo "Hasil kali 5 x 10 = " . $hasil . "\n";

echo "Hasil kali" . $x . "x" . $y . "=" . $hasil . "\n" ;

echo 25 + 5;
echo "\n";
echo 25 - 5;
echo "\n";
echo 25 * 5;
echo "\n";
echo 25 / 5;
echo "\n";
echo 100 % 3; //modulus untuk mencari nilai akhir apakah ada sisa atau tidak
echo "\n";

$a = 50;
$a = 10;

echo $a;

//biasanya untuk menggabungkan tag HTML pada logic
$a = "<div>";
$a .= "<h3>Radianti Novita <h3/>";
$a .= "<p>(Gunakan . untuk menggabungkan)</p>";
$a .= "<p>Sambungkan lagi</p>";
$a .= "</div>";

echo $a;

//Bolean true / false || 1/0
var_dump(1 == "1"); // true- karena hanya membandingkan value
var_dump(1 === "1"); // false - karena membandingkan juga tipe datanya


/**
 * Operator logika
 * && (and)
 * || (or)
 * ! (not)
 * > (more than)
 * < (less than)
 * == (equal)
 * >= (more than or equal)
 * <= (less than or equal)
 * != (not equa;)
 */

/*$umur = 17; 
var_dump($umur < 20 && $umur >=16);

$nama = "T.G";
var_dump($nama == "TG");




// ini standar output biasanya pakai echo; analisa vardump
// ini single komentar
# ini juga single komentar
/**
 * multiple komentar
 * line 1
 */
 //gunakan \n untuk enter di terminal
 // gunakan <br/> untuk di browser
// untuk menggabungkan 2 sting pakai . (dot)

 /*//ini untuk menampilkan kalimat / string
    echo "Radianti Novita" . "(pakai echo)\n";

 //ini cara ke 2
    print "Radianti Novita" . "(pakai print)\n" ; 

// cara 3 print r hanya memberikan nilainya fungsinya build in (stinng, array, dsb)
    print_r("Radianti Novita (pakai print_r)\n");

// cara 4 khusus untuk analisa data programmer
var_dump("Radianti Novita (pakai var_dump)");
*/





$nama = "Radianti";
$umur = "22";
$birthday ="21-11-2001"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coba php</title>
</head>
<body>
    <ul>
        <li> Nama : <?=  $nama; ?></li>
        <li> Umur : <?=  $umur; ?></li>
        <li> Tanggal lahir : <?=  $birthday; ?></li>
        <li> 5 x 5 adalah   : <?=  5 * 5; ?></li>
</ul>

    
</body>
</html>