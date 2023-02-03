<?php
//Nhan data tu form editstudent.php
$sv_id = $_POST["id"];
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
$sql = "UPDATE students SET name = '$sv_name', email = '$sv_email', mark = $sv_mark, gender = '$sv_gender' WHERE id = $sv_id";
$rs = $conn->query($sql);
if ($rs) {
    header("Location: liststudent.php");
    die();
}
$_SESSION["error"] = "Khong sua duoc sinh vien";
header("Location: editstudent.php?id=$sv_id");