<?php

// Đếm số lượng phần tử trong mảng
$customerArr = [
    'An',
    'Lâm',
];

$countCustomer = count($customerArr);
echo $countCustomer;

echo "<br/>";



// Đưa mảng về dạng tuần tự
$customerAge = [
    'key 1' => 'Item 1',
    'key 2' => 'Item 2',
    'Item 3'
];
echo "<pre>";
print_r($customerAge);
echo "</pre>";

$customerAge = array_values($customerAge);
echo "<pre>";
print_r($customerAge);
echo "</pre>";

$customerAge = array_keys($customerAge);
echo "<pre>";
print_r($customerAge);
echo "</pre>";


// Trả về giá trị vừa xóa
$deleteAge = array_pop($customerAge);
echo $deleteAge;

// array_push(); //Thêm 1 hoặc nhiều phần tử vào cuối mảng và trả về số lượng phần tử của mảng khi thêm
// array_unshift(); //Thêm 1 hoặc nhiều phần tử vào đầu mảng và trả về số lượng phần tử của mảng khi thêm
// sort(); //Sắp xếp các values tăng dần, trả về kết quả true, false
// array_flip(); // Đảo key với value của mỗi phần tử
// array_reverse(); // Đảo ngược thứ tự các thành phần của mảng
// array_merge(); // Gộp các mảng
// array_rand(); // Lấy ra key ngẫu nhiên trong mảng với numver là số lượng muốn lấy
// array_search(); // Tìm kiếm giá trị của mảng và trả về key của ptu đó nếu có
// array_slice(); // Lấy ra $lenght ptu bắt đầu từ $begin trong mảng
// array_unique(); // Loại bỏ các ptu trùng nhau trong mảng, trả về 1 mảng mới
// serialize($input); // Chuyển đổi mảng thành chuỗi mã hóa

echo "<br/> ================ <br/>";



// // Kiểu dữ liệu number

// is_numeric(); // hàm kiểm tra có phải số không, trả về true, false
// hoặc filter_var();


// $number = "100.000";
// $number = str_replace(".", "", $number);

$number = "100.000,05";
$number = str_replace(".", "", $number);
$number = str_replace(",", ".", $number);


if (is_numeric($number)) {
    echo "Là kiểu số";
} else {
    echo "Không là kiểu số";
}
echo "<br/>";
echo "Tổng"."=".($number+200000);

$numberr = "21";
$checknumberr = filter_var($numberr, FILTER_VALIDATE_INT, [
    "options" => ["min_range" => 1, "max_range" => 10]
]);
var_dump($checknumberr);

echo "<br/> ================ <br/>";

$number = "100.000,05"; // Kiểm tra kiểu số nguyên
$checknumber = is_int($number);


if ($checknumber) {
    echo "Là kiểu số nguyên";
} else {
    echo "Không là kiểu số nguyên";
}
echo "<br/>";

echo "<br/> ================ <br/>";

$number = "100.000,05"; // Kiểm tra kiểu số thực
$checknumber = is_float($number);


if ($checknumber) {
    echo "Là kiểu số thực";
} else {
    echo "Không là kiểu số thực";
}
echo "<br/>";

echo "<br/> ================ <br/>";

$number = "100.000,05"; // Ép kiểu số nguyên
$number = (int)$number;
var_dump($number);

echo "<br/> ================ <br/>";

$number = -10; // Lấy trị tuyệt đối
$number = abs($number);
echo $number;

echo "<br/> ================ <br/>";


$number = 10.0649; // Làm tròn
echo round($number, 3);

echo "<br/> ================ <br/>";

$number = 2.4; // Làm tròn lên (thường dùng để tính số trang)
echo ceil($number);

echo "<br/> ================ <br/>";

$number = 2.7; // Làm tròn xuống
echo floor($number);

echo "<br/> ================ <br/>";

$random = rand(1, 100); // Lấy số ngẫu nhiên
echo $random;

echo "<br/> ================ <br/>";

$number = 1000000.6; // Định dạng số, và làm tròn
echo number_format($number, 1, ",", ".");  //1.Biến, 2.Số sau dấu phẩy, 3.Dấu cách số phẩy, 4.dấu giữa các số

echo "<br/> ================ <br/>";

