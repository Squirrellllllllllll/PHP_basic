/*
1. Khai báo một biến có tên là $name và gán giá trị "John" cho nó. Sau đó in ra màn hình "Xin chào John!" bằng cách sử dụng biến $name.

2. Khai báo hai biến $a và $b và gán giá trị là 5 và 3 cho chúng. Tính tổng, hiệu, tích và thương của $a và $b và in kết quả ra màn hình.

3. Khai báo một biến $age và gán giá trị là 25 cho nó. Kiểm tra nếu $age lớn hơn hoặc bằng 18 thì in ra "Bạn đã đủ tuổi trưởng thành" và ngược lại in ra "Bạn chưa đủ tuổi trưởng thành".

4. Khai báo một biến $price và gán giá trị là 100. Sử dụng biến này để tính giá sau khi được giảm giá 10% và in ra kết quả.

5. Khai báo một biến $color và gán giá trị là "red". Kiểm tra nếu $color là "red" thì in ra "Màu đỏ" và ngược lại in ra "Không phải màu đỏ".
*/
<?php

echo '<br />'; 
//1.
$name = "John";
echo "she $name !";
echo '<br />';
//2.
$a = 5;
echo 'a'.' '.'='.' '.$a;
echo '<br />';
$b = 3;
echo 'b'.' '.'='.' '.$b;
echo '<br />';
$tong = $a + $b;
echo 'Tong'.' '.'='.' '. $tong.';'. ' ';
$hieu = $a - $b;
echo 'Hieu'.' '.'='.' '. $hieu.';'. ' ';
$tich = $a * $b;
echo 'Tich'.' '.'='.' '. $tich.';'. ' ';
$thuong = $a / $b;
echo 'Thuong'.' '.'='.' '. $thuong;
echo '<br />';
//3.
$age = 25;
$check = ($age >= 18);
if($check){
    echo 'Bạn đã đủ tuổi trưởng thành';
}else{
    echo 'Bạn chưa đủ tuổi trưởng thành';
};
echo '<br/>';
//4.
$price = 100;
$discount = 10 / 100;
$price2 = $price * $discount;
$total = $price - $price2;
echo 'Kết quả:'.' '. $total;
echo '<br/>';
//5.
$color = "red";
if($color === "red"){
    echo 'Màu đỏ';
}else{
    echo 'Không phải màu đỏ';
};
echo '<br/>';