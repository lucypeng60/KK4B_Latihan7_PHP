<?php
    session_start();

    $_SESSION['nama'] = "Lucy";
    echo "<a href='session02.php'>Menuju ke halaman ke dua</a>";
?>