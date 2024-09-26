<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is insertmovie webpage</title>
    <link rel="stylesheet" href="insert.css">
</head>
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

div {
    display: flex;
    flex-direction: column;
    align-items: center; /* จัดกลางเนื้อหาภายใน div */
}

form {
    background-color: #ffffff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); /* เงาอ่อนๆ ที่ดูพอดี */
    width: 300%; /* ความกว้างเต็มภายใน max-width */
    max-width: 400px; /* ความกว้างสูงสุดของฟอร์ม */
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

input[type="text"], input[type="date"] { /* เปลี่ยนประเภท input เป็น "date" */
    width: 100%;
    padding: 10px;
    font-size: 14px;
    border: 1px solid #ced4da;
    border-radius: 5px;
    box-sizing: border-box;
    background-color: #e9ecef;
}

input[type="text"]:focus, input[type="date"]:focus { /* เปลี่ยนประเภท input ที่นี่ด้วย */
    border-color: #007bff;
    outline: none;
}

button {
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

button:hover {
    background-color: #0056b3;
}
</style>

<body>
    <div>
        <h1>Insert Movie</h1>
        <form method="post" action="insertmoviesuccess.php">
            <p>
                <label for="did">ID</label>
                <input type="text" id="did" name="did">
            </p>
            <p>
                <label for="dname">ชื่อ</label>
                <input type="text" id="dname" name="dname">
            </p>
            <p>
                <label for="ระยะเวลา">ระยะเวลา</label>
                <input type="time" id="ระยะเวลา" name="ระยะเวลา">
            </p>
            <p>
                <label for="วันที่">วันที่</label>
                <input type="date" id="วันที่" name="วันที่"> <!-- เปลี่ยนประเภท input เป็น "date" -->
            </p>
            <button type="submit">บันทึก</button> <!-- ลบ <a> รอบปุ่มเพื่อให้ปุ่มทำงานเป็นฟอร์ม -->
        </form>
    </div>
</body>
</html>
