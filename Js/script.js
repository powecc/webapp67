console.log('This is my script file') //โชว์ใน  consol
document.getElementById("text").innerHTML = "Boonpiphop"; //ข้อความที่ต้องการแสดง
document.write("Hello document write"); //แสดงข้ออความแบบยาวๆ

window.alert("welcome to my page"); //แสดงการแจ้งเตือน

const byte_Site = str =>new Blob([str]).site;
console.log(byte_Site('123456'));
console.log(byte_Site('Hello World'));
console.log(byte_Site('Ã¢'))
