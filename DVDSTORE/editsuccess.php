<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is editsuccess webpage</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
            require 'conn.php';
$sql_update="UPDATE member SET mname='$_POST[mname]',mlastname='$_POST[mlastname]' ,address='$_POST[address]' ,telephone='$_POST[telephone]' WHERE mid='$_POST[mid]' ";

            $result= $conn->query($sql_update);

            if(!$result) {
                die("Error God Damn it : ". $conn->error);
            } else {

            echo "Edit Success <br>";
            header("refresh: 1; url=mainmenu.php");
            }

        ?>

</body>
</html>