<?php
    $value = "llucypeng";
    $value2 = "Lucy Aprilianda Putri Peng";

    setcookie("username", $value);
    setcookie("fullname", $value2);

    echo "<h1>Ini Halaman Pengetesan cookie</h1>";

    echo "<h2>Klik <a href='cookie02.php'>disini</a>Untuk pengetesan cookie</h2>";
?>