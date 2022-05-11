<?php 

    /********************************************
    File Name    : update.php
    Description  : Delete Record
    Created By   : Shuvadeep Podder
    Created On   : 10-May-2022
    ********************************************/


    /* Step 4: Delete Record from JSON File */

    $deleteId = $_GET['deleteId'];

    $data = file_get_contents('userData.json');
    $data = json_decode($data, true);

    unset($data[$deleteId]);

    //encode back to json

    $data = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents('userData.json', $data);

    header('Location: viewRecord.php');

?>
