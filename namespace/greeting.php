<?php
    include 'greeting_kr.php';
    include 'greeting_en.php';
    echo greeting_kr\Hello::says(), "<br />\n";
    echo greeting_en\Hello::says(), "<br />\n";
?>