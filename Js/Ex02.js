const randomIntegerInRange = (min, max) => Math.floor(Math.random() * (max - min + 1)) + min;
console.log(randomIntegerInRange(2, 10)); /*  เรียกใช้ฟังก์ชัน randomIntegerInRange โดยกำหนดช่วงให้เป็นตั้งแต่ 2 ถึง 10 */
console.log(randomIntegerInRange(1, 5));