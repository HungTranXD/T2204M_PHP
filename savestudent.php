<?php
include_once ("3_database.php");
//Nhan data tu form createstudent.php
$sv_name = $_POST["name"];
$sv_email = $_POST["email"];
$sv_mark = $_POST["mark"];
$sv_gender = $_POST["gender"];


$sql = "INSERT INTO students(name, email, mark, gender) VALUES ('$sv_name', '$sv_email', $sv_mark, '$sv_gender')";
$rs = execute($sql);
if ($rs) {
    header("Location: liststudent.php");
    die();
}
$_SESSION["error"] = "Khong them duoc sinh vien";
header("Location: createstudent.php");
