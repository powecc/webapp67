<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is mainmenu webpage</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    require 'conn.php';
    $sql = "SELECT * FROM dvd";
    $result = $conn->query($sql);
    if(!$result){
        die("Error : ". $conn->$conn_error);
    }
    ?>

    <h1>INSERT MOVIE DVD</h1><br>  
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>รายละเอียด</th>
                    <th>ระยะเวลา</th>
                    <th>วันที่</th>
                    <th> Edit </th>
                </tr>
            </thead>
            <tbody>
                <?php // show data by fetch from database
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo"<tr><td>".$row["did"]."</td>"."<td>".$row["dname"]."<td>".$row["ระยะเวลา"]."<td>".$row["วันที่"]."</td>"."<td>"."<a href='editdvd.php?did=".$row["did"]."'><button> Edit </button></a>"."</td>";
                            echo "</tr>";    
                        }
                    }else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </tbody>
        </table>  
        <br>
        <a href='insertmovie.php'><button> Insert movie dvd </button></a>
        <a href='insertmember.php'><button> Insert member </button></a>
        


</body>
</html>