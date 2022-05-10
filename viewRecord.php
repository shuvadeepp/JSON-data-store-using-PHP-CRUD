<?php 

    /********************************************
    File Name    : viewRecord.php
    Description    : Fetch Record
    Created By    : Shuvadeep Podder
    Created On    : 10-May-2022
    ********************************************/

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> CRUD Operation on JSON File using PHP </title>
    <style>
        
    </style>
</head>
<body>
    <h2 align="center">CRUD Operation on JSON File using PHP</h2>
    <a href="index.php"> Back </a>
    
    <table border="1" cellspacing="pixels" align="center">
        <tr>
            <th> Sl# </th>
            <th> First Name </th>
            <th> Last Name </th>
            <th> Mobile </th>
            <th> Action </th>
        </tr>
        <tr>
            
        <?php 

            /* Step 2: fetch all records */

            $data   = file_get_contents('userData.json');
            $data   = json_decode($data);
            // $count  = 1;
            if (!empty($data)) { 
                foreach ($data as $key => $row) { 
                    
        ?> 
        </tr>
        <tr>
            <td> <?php echo $key+1; ?> </td>
            <td> <?php echo $row->fname ?> </td>
            <td> <?php echo $row->lname ?> </td>
            <td> <?php echo $row->mobile ?> </td>
            <td> 
                <a href="update.php?editId=<?php echo $key; ?>"> Edit </a>
                <a href="delete.php?deleteId=<?php echo $key; ?>"> Delete </a>
            </td>
        </tr>
        <?php 
            }
        }
        ?>    
        
    </table>
        
</body>
</html>