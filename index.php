<?php
session_start();
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header style="background-image: linear-gradient(to right, #00b4db, #0083b0)">
        <div class="container">
            <div class="row justify-content-between align-items-center py-1">
                <div class="col-auto">
                    <i class="fa-brands fa-wordpress" style="font-size: 2rem; color: white"></i>
                </div>
                <div class="col-auto">
                    <?php if (isset($_SESSION["username"])) : ?>
                        <i class="fa-solid fa-user" style="color: white"></i>
                        <p class="d-inline text-light fs-6"><?php echo $_SESSION["username"] ?></p>
                        <?php unset($_SESSION["username"]); ?>
                    <?php else : ?>
                        <a href="login.php" type="button" class="btn btn-outline-dark btn-sm" style="color: white; border-color: transparent">Login</a>
                        <a href="register.php" type="button" class="btn btn-outline-dark btn-sm" style="color: white; border-color: white">Sign up</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </header>

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



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>


