<?php 

    /********************************************
    File Name    : index.php
    Description    : Insert record
    Created By    : Shuvadeep Podder
    Created On    : 10-May-2022
    ********************************************/


    /* Step 1: Create a new record */

if(isset($_POST['btnSubmit'])) {

    // echo 111;
    $data   = file_get_contents('userData.json');
    $data   = json_decode($data, true);
    $userArr = array(
        'fname'     => $_POST['fname'],
        'lname'     => $_POST['lname'],
        'mobile'    => $_POST['mobile']
    );

    $data[] = $userArr;
    $data   = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents('userData.json', $data);

    header('Location: index.php');

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> CRUD Operation on JSON File using PHP </title>
</head>
<body>
    <h2 align="center"> CRUD Operation on JSON File using PHP </h2>

    <form action="" method="post" align="center">
        <input type="text" name="fname" id="fname" placeholder="First Name"> <br><br>
        <input type="text" name="lname" id="lname" placeholder="Last Name"> <br><br>
        <input type="text" name="mobile" id="mobile" maxlength="10" placeholder="Mobile"> <br><br>
        <input type="submit" name="btnSubmit" value="Submit"> &nbsp&nbsp <a href="viewRecord.php"> view </a>
    </form>
</body>
</html>