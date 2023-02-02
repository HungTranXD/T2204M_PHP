<?php
    $x = 10;
    $x = "hello";
    $y = 20;
    $z = $y + 10;
    $x = $x . $y; //noi chuoi
    $t = true;

    echo $x;
    echo $y;

    if($t) {
        echo "T is true";
    } else {
        echo "T is false";
    }
    for ($i = 0; $i < 10; $i++) {
        echo "<h2>i = $i </h2>";
    }

    /* ----------------- Mang ------------- */
    $arr = []; //khai bao mang
    $arr[0] = 10;
    $arr[] = 20; //tu chen tiep
    $arr[] = 15;
    $arr[] = 30;
    $arr[] = "damm";

    foreach ($arr as $item) {
        // $item giong arr[i]
    }
    foreach ($arr as $key => $item) {
        echo "<h3>key: $key = value: $item</h3>";
    }

    // Associative array (giong hash map trong js)
    $sv = [];
    $sv["name"] = "Nguyen Van An";
    $sv["age"] = 18;
    $sv["gender"] = "Nam";
    foreach ($sv as $key => $item) {
        echo "<h3>key: $key = value: $item</h3>";
    }

    /* ----------------- Function ---------------- */
    function tinhTong($a, $b) { //khai bao
        echo $a + $b;
        // return $a + $b;
    }
    tinhTong(5, 7);