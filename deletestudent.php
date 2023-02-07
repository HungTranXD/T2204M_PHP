<?php
include_once ("3_database.php");
//Lay id sinh vien muon sua tu tham so
$deleteID = $_GET["id"];

$sql = "DELETE FROM students WHERE id = $deleteID";
$rs = execute($sql);

if ($rs) {
    header("Location: liststudent.php");
    die();
}
$_SESSION["error"] = "Khong xoa duoc sinh vien";
header("Location: liststudent.php");
