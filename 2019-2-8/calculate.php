<?php
    $Name = $_POST["UserName"];
    $Mail = $_POST["UserMail"];
    $Money = $_POST["Money"];
    $Rate = $_POST["Rate"];
    $Mouth = $_POST["Mouth"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p><i><?php echo $Name; ?></i>,您好!</p>
    当本金为<?php echo $Money; ?>,年利率为<?php echo $Rate; ?>,月数为<?php echo $Mouth; ?>,本利和将为<?php echo $Money + ($Money * $Rate) * $Mouth / 12; ?>
</body>
</html>