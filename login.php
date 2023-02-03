<?php
session_start();
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
    <section>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-8 mt-3">
            <div class="row">
                <h1 class="col-auto display-6">Login</h1>
                <div class="col"><div class="bg-secondary mt-4" style="height: 1px"></div></div>
            </div>
            <form action="post-login.php" method="post">
                <div class="mb-3">
                    <label for="inputName" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" id="inputName" required value="<?php echo isset($_SESSION["username"]) ? $_SESSION["username"] : ''; ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="pwd" class="form-control" id="exampleInputPassword1" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
    </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
