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
        $sql_update="UPDATE dvd SET did='$_POST[did]', dname='$_POST[dname]',ระยะเวลา='$_POST[ระยะเวลา]' 
                                    ,วันที่='$_POST[วันที่]' WHERE did='$_POST[did]' ";

            $result= $conn->query($sql_update);

            if(!$result) {
                die("Error God Damn it : ". $conn->error);
            } else {

            echo "Edit Success <br>";
            header("refresh: 1; url=mainmenudvd.php");
            }

        ?>

</body>
</html>