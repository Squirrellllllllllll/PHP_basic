<?php
// Isset function
// Kiểm tra biến tồn tại hay không (trừ NULL) -> Trả về bool(true/false)
// Không kiểm tra được kiểu biến
$number = 1;

$check = isset($number);
var_dump($check);

if ($number) {
    echo $number;
}

// Check kiểu dữ liệu của biến = isset
// if (isset($number) && $number) {
//     var_dump($number);
// }