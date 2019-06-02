<?php
    $Test = $_GET['Text'];
    $Test = htmlspecialchars($Test);//-XSS
    echo "Your text $Test";
?>