<?php
    include 'database.php';

    header('Content-Type: application/json');

    echo $fatturato= json_encode($graphs['fatturato']);
    

 ?>
