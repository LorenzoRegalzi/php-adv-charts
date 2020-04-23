<?php
    include 'database.php';

    header('Content-Type: application/json');

    echo $agente= json_encode($graphs['fatturato_by_agent']);

 ?>
