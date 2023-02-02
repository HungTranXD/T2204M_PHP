<?php
session_start(); //session là bo nho doc lap duoc may chu cap cho moi nguoi dung
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
</head>
<body>
    <section>
        <div class="container">
            <div class="row justify-content-center align-items-center" style="height: 100vh">
                <div class="col-8">
                    <form action="post-register.php" method="post">
                        <div class="mb-3">
                            <label for="inputName" class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" id="inputName" required value="<?php echo isset($_SESSION["username"]) ? $_SESSION["username"] : ''; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required value="<?php echo isset($_SESSION["email"]) ? $_SESSION["email"] : ''; ?>">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="pwd" class="form-control" id="exampleInputPassword1" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword2" class="form-label">Confirm password</label>
                            <input type="password" name="cfm_pwd" class="form-control" id="exampleInputPassword2" required>
                            <?php if (isset($_SESSION["error"])): ?>
                                <div id="error" class="form-text text-danger"><?php echo $_SESSION["error"]; ?></div>
                            <?php endif; ?>
                            <!-- Hien thi loi xong phai xoa di -->
                            <?php unset(
                                    $_SESSION["error"],
                                    $_SESSION["username"],
                                    $_SESSION["email"],
                            ); ?>

                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
