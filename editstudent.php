<?php
    include_once ("3_database.php");

    //Lay id sinh vien muon sua tu tham so
    $editID = $_GET["id"];

    $sql = "SELECT * FROM students WHERE id = $editID";
    $data = querry($sql);
    if (count($data) == 0) {
        die("404 not found!");
    }
    $data =$data[0];
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
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8 mt-3">
                    <div class="row">
                        <h1 class="col-auto display-6">Edit student</h1>
                        <div class="col"><div class="bg-secondary mt-4" style="height: 1px"></div></div>
                    </div>
                    <form action="updatestudent.php" method="post">
                    <!-- Neu khong co id input có thể thêm tham số vào "updatestudent.php?id=..." -->
                        <div class="mb-3">
                            <label for="inputID" class="form-label">ID</label>
                            <input type="text" name="id" class="form-control" id="inputID" required value="<?php echo $data["id"] ?>" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="inputName" class="form-label">Fullname</label>
                            <input type="text" name="name" class="form-control" id="inputName" required value="<?php echo $data["name"] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required value="<?php echo $data["email"] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="inputMark" class="form-label">Mark</label>
                            <input type="number" name="mark" class="form-control" id="inputMark" required value="<?php echo $data["mark"] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword2" class="form-label">Gender</label>
                            <select class="form-control" name="gender" id = exampleInputPassword2>
                                <option <?php if($data["gender"]=="Male") echo "selected" ?> value="Male">Male</option>
                                <option <?php if($data["gender"]=="Female") echo "selected" ?> value="Female">Female</option>
                                <option <?php if($data["gender"]=="Other") echo "selected" ?> value="Other">Other</option>
                            </select>

                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
