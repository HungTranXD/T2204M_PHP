<?php
//Nhan data tu form createstudent.php
$sv_name = $_POST["name"];
$sv_email = $_POST["email"];
$sv_mark = $_POST["mark"];
$sv_gender = $_POST["gender"];

//Ket noi voi csdl
$db = "t2204m-java1";
$host = "localhost";
$user = "root";
$pwd = "";

$conn = new mysqli($host, $user, $pwd, $db);

//Ket noi khong thanh cong
if($conn->connect_error) {
    echo $conn->error;
    die();
}

//Ket noi thanh cong
$sql = "INSERT INTO students(name, email, mark, gender) VALUES ('$sv_name', '$sv_email', $sv_mark, '$sv_gender')";
$rs = $conn->query($sql);
if ($rs) {
    header("Location: liststudent.php");
    die();
}
$_SESSION["error"] = "Khong them duoc sinh vien";
header("Location: createstudent.php");
