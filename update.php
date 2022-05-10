<?php 

    /********************************************
    File Name    : update.php
    Description  : Update Record
    Created By   : Shuvadeep Podder
    Created On   : 10-May-2022
    ********************************************/


    /* Step 3: Update a record */

    $editId = $_GET['editId'];
    /* Get JSON Data */
    $data       = file_get_contents('userData.json');
    $dataArr    = json_decode($data, true);
    $row        = $dataArr[$editId];
    // echo"<pre>";print_r($dataArr);exit;

    if( isset($_POST['btnupdate']) ) {
        $updateArr = array(
            'fname'     => $_POST['fname'],
            'lname'     => $_POST['lname'],
            'mobile'    => $_POST['mobile']
        );
        // print_r($updateArr);exit;
        $dataArr[$editId] = $updateArr;

        $data = json_encode($dataArr, JSON_PRETTY_PRINT);
        file_put_contents('userData.json', $data);

        header('Location: viewRecord.php');
        
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
        <input type="text" name="fname" id="fname" placeholder="First Name" value="<?php echo $row['fname']; ?>"> <br><br>
        <input type="text" name="lname" id="lname" placeholder="Last Name" value="<?php echo $row['lname']; ?>"> <br><br>
        <input type="text" name="mobile" id="mobile" maxlength="10" placeholder="Mobile" value="<?php echo $row['mobile']; ?>"> <br><br>
        <input type="submit" name="btnupdate" value="Submit">
    </form>
</body>