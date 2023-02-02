<?php
$title = "Tổng hợp tin tức ngày 02-02-2023";
$sv = [
    "name" => "Nguyen Van An",
    "age" => 18,
    "address" => "Ha Noi"
];
$dishes = ["Pho bo", "Pho ga", "Bun"];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $title; ?></h1>
    <h2>Sinh vien: <?php echo $sv["name"]; ?></h2>
    <p>Dia chi: <?php echo $sv["address"]; ?></p>

    <!--    Dieu kien if    -->
    <?php if ($sv["age"] >= 18): ?>
        <p><i>Da tren 18 tuoi</i></p>
    <?php else: ?>
        <p><i>Chua du 18 tuoi</i></p>
    <?php endif; ?>

    <!--Vong lap-->
    <ul->
        <?php foreach($dishes as $value): ?>
            <li><?php echo $value ?></li>
        <?php endforeach; ?>
    </ul->

    <a href="demo1.php">Chuyen sang trang demo1</a>

</body>
</html>


