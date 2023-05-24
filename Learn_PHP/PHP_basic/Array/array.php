<?php
// 1. Khai báo mảng
$carArr = ['Honda', 'Huyndai', "Toyota", null, 30];
echo "<pre>";
print_r ($carArr);
echo "</pre>";


echo "<br/>";


$customerArr = [
    "name" => "Phúc An",
    "age" => "20",
];

echo "<pre>";
print_r ($customerArr);
echo "</pre>";

echo "<br/>";


// 2. Thêm phần tử vào mảng

// Cách 1: Thêm khi khai báo: Như trên
// Cách 2: Thêm sau khi khai báo
$salaryArr = [];

$salaryArr[] = "100 triệu";
$salaryArr["age"] = 10;
$salaryArr["name"] = "Phúc An";

echo "<pre>";
print_r ($salaryArr);
echo "</pre>";


// 3. Sửa giá trị phần tử mảng
$salaryArr["name"] = "Mai"; //trùng key => lấy giá trị sau cùng

echo "<pre>";
print_r ($salaryArr);
echo "</pre>";


// 4. Xóa phần tử của mảng : 
// Dùng hàm unset()
// Sau khi xóa không thiết lập lại thứ tự key

unset($salaryArr["age"]);

echo "<pre>";
print_r ($salaryArr);
echo "</pre>";



// 5. Đọc mảng
$classArr = [
    "12A1",
    "12A2",
    "12A3",
    "12A4",
    "12A5", 
];

echo "<pre>";
print_r ($classArr);
echo "</pre>";

// Đọc mảng tuần tự ($index tăng dần đều từ 0)
for ($index = 0; $index < count($classArr); $index++) {
    echo "$classArr[$index] <br/>";
}


echo "<br/>";
// Đọc mảng bất kỳ
$mixArr = [
    "company" => "EUP",
    "major" => "ICT",
    "" => 30,
];

foreach ($mixArr as $item) {
    echo "$item <br/>";
}


echo "<br/>";
// Đọc mảng có cả key
$mixArr = [
    "company" => "EUP",
    "major" => "ICT",
    "" => 30,
];

foreach ($mixArr as $key => $item) {
    echo "$key = $item <br/>";
}