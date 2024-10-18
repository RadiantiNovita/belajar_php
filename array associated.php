<?php
$arr = [
    ["Senin", "Selasa", "Rabu"],
    ["Januari", "Februari", "Maret"],
    ["2020", "2021", "2022"],
];

foreach($arr as $data){
    var_dump($data);
}

$dataPerson = [
[
    "nama"=> "Radianti",
    "kota"=>  "Bandung",
    "baju" => "Hitam",
    "makanan_favorit" => [
        "ayam", "roti", "mie" ]
    ],
[
    "nama" => "Deriyana",
    "kota" =>  "Bandung",
    "baju" => "biru",
    "makanan_favorit" => [
        "mie", "roti", "ayam"]
    ],
[
    "nama"=>  "Nabil",
    "kota"=>  "Bandung",
    "baju"=>"putih",
    "makanan favorit" => [
        "rendang", "ayam", "rendang"]
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul style="margin-bottom: 24px">
    <?php foreach($arr as $data): ?>
        <li>index 0: <?= $data[0] ?></li>
        <li>index 1:  <?= $data[1] ?></li>
        <li>index 2:  <?= $data[2] ?></li>
        <?php endforeach; ?>
    </ul>
    
    <ul>
    <?php foreach($dataPerson as $data): ?>
        <ul style="margin-bottom: 24px">
        <li>nama: <?php echo $data['nama']; ?></li>
        <li>kota: <?php echo $data['kota']; ?></li>
        <li>baju: <?php echo $data['baju']; ?></li>
        <li> 
            makanan favorit
        <ol>
            <?php foreach($data['makanan_favorit'] as $makanan): ?>
                <li><?php echo $makanan; ?></li>
        <?php endforeach; ?>
            </ol>
        </li>
    </ul>
    <?php endforeach; ?>
</body>
</html>
