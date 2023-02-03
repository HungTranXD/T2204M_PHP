<?php
//Lay id sinh vien muon sua tu tham so
$deleteID = $_GET["id"];

//Ket noi csdl de lay thong tin sv co id tren
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
$sql = "DELETE FROM students WHERE id = $deleteID";
$rs = $conn->query($sql);

if ($rs) {
    header("Location: liststudent.php");
    die();
}
$_SESSION["error"] = "Khong xoa duoc sinh vien";
header("Location: liststudent.php");
