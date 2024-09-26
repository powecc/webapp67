<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is editmember webpage</title>
    <style>
                    
           /* style.css */
body {
    font-family: 'Arial', sans-serif;
    background-color: #f8f9fa;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

form {
    background-color: #ffffff;
    padding: 20px;
    border-radius: 8px;
    border: 1px solid #ced4da;
    width: 320px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

form p {
    margin-bottom: 15px;
}

label {
    display: block;
    font-size: 14px;
    color: #495057;
    margin-bottom: 5px;
}

input[type="text"] {
    width: 100%;
    padding: 10px;  /* เพิ่ม padding ให้สูงเท่ากัน */
    font-size: 14px;
    color: #495057;
    border: 1px solid #ced4da;
    border-radius: 4px;
    background-color: #e9ecef;
    box-sizing: border-box;  /* ทำให้ padding รวมกับขอบไม่เกินขนาดของกล่อง */
}

input[type="submit"], button {
    width: 100%;
    padding: 10px;  /* เพิ่ม padding ให้เท่ากับ input */
    font-size: 14px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-top: 10px;
    box-sizing: border-box;  /* ทำให้ขอบไม่เกินขนาดของกล่อง */
}

button {
    background-color: #6c757d;
}

input[type="submit"]:hover, button:hover {
    opacity: 0.9;
}


</style>
</head>
<body>
<?php
        if(!isset($_GET['mid'])){
            header("refresh: 0; url=mainmenu.php");
        }
        require 'conn.php';
        $sql = "SELECT * FROM member WHERE mid='$_GET[mid]'";
        $result = $conn->query($sql);
        $row = mysqli_fetch_array($result);
    ?>

<form method="post" action="editsuccess.php">
        <p>

        <label>ID</label>
        <input type="text" name="mid" id="mid" value="<?=$row['mid'];?>" />

        </p>

        <p>

            <label>ชื่อ</label>

            <input type="text" name="mname" id="mname" value="<?=$row['mname'];?>" />

        </p>

        <p>

            <label>นามสกุล</label>

            <input type="text" name="mlastname" id="mlastname" value="<?=$row['mlastname'];?>" />

        </p>

        <p>

            <label>ที่อยู่</label>

            <input type="text" name="address" id="address" value="<?=$row['address'];?>" />

        </p>

        <p>

            <label>เบอร์โทร</label>

            <input type="text" name="telephone" id="telephone" value="<?=$row['telephone'];?>" />

        </p>
        <input type="submit" value="บันทึก">
        
    </form>


</body>
</html>