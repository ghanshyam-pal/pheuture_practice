<?php
    print_r($_REQUEST);
    $result = file_get_contents("php://input");
    echo $result;

?>