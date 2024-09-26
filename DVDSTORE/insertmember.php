<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is insertmember webpage</title>
    <style>
        /* insert.css */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa; /* สีพื้นหลังที่ดูเรียบ */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); /* เงาอ่อนๆ ที่ดูพอดี */
            width: 300%; /* ขนาดฟอร์มเต็มที่ */
            max-width: 400px; /* ขนาดฟอร์มที่พอดี */
            box-sizing: border-box;
        }

        form p {
            margin-bottom: 15px;
        }

        label {
            font-size: 14px;
            color: #495057;
            margin-bottom: 5px;
            display: block;
        }

        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            box-sizing: border-box;
            background-color: #e9ecef;
        }

        input[type="text"]:focus, textarea:focus {
            border-color: #007bff;
            outline: none;
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div>
        <h1>Insert Member</h1>
        <form method="post" action="insertmembersuccess.php">
            <p>
                <label for="mid">ID</label>
                <input type="text" id="mid" name="mid" required>
            </p>

            <p>
                <label for="mname">ชื่อ</label>
                <input type="text" id="mname" name="mname" required>
            </p>

            <p>
                <label for="mlastname">นามสกุล</label>
                <input type="text" id="mlastname" name="mlastname" required>
            </p>

            <p>
                <label for="address">ที่อยู่</label>
                <textarea id="address" name="address" rows="3" required></textarea>
            </p>

            <p>
                <label for="telephone">เบอร์โทร</label>
                <input type="text" id="telephone" name="telephone" required>
            </p>

            <input type="submit" value="บันทึก">
        </form>
        <a href="mainmenu.php">กลับไปยังเมนูหลัก</a>
    </div>
</body>
</html>
