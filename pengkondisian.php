<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengkondisian</title>
</head>
<body>
<?php
    //if else
    //if-else is-else
    //ternary
    //switch

$umur = 19;
//if($umur == 20){
    //sama kaya kondisi true
    //echo "umur sama dengan 20";
//}else if($umur < 20){
    //kondisi true apabila kondisi pertama tidak terpenuhi
  //  echo "umur kurang dari 20";
//}else if($umur < 30)
//}else{
    //kondisi false
  //  echo "umur lebih dari 30";
//}

//$umur = 20;
//echo ($umur < 30 ? "Umur kurang dari 30" : "umur lebih dari 30");

//switch
switch($umur){
    case 15:
    case 16:
    case 17:
    case 18:
    case 19:
        echo "umur dibawah 20 diatas 14";
        break;
    case 20:
        echo "umur 20";
        break;
    default:
        echo "umur tidak didefinisikan";        
}
?>
</body>
</html>