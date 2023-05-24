<?php
// Lý thuyết:

// 1. Hàm là gì?
//  - Hàm là một chương trình con thực hiện 1 khối công việc được lặp đi lặp lại nhiều lần trong khi chạy chương trình
//  - Hàm dùng tách một khối công việc cụ thể để chương trình đỡ phức tạp

// 2. Tác dụng của Hàm
//  - Dễ bảo trì
//  - Dễ quản lý
//  - Có thể tái sử dụng code


/**
 * Cú pháp định nghĩa hàm
 * 
 *    function ten_ham(danh_sach_so) {
 *        //Nội dung hàm
 * }
 * 
 * 
 *   + tên hàm do cta tự đặt (động từ)
 *     . do
 *     . make
 *     . built
 *     . create
 *   + danh sách tham số: Danh sách các biến cách nhau bởi dấu phẩy
 *   + Bên trong cặp ngoặc nhọn là nội dung hàm 
 * 
 * Cú pháp gọi hàm
 *   ten_ham(danh_sach_tham_tri)
 * 
 */

// Định nghĩa hàm
function makeTotal($a, $b) {
    $total = $a + $b;
    echo "Total $a + $b = $total";
}

// Gọi hàm
maketotal(0, 5);
echo "<br />";

// Gọi hàm
$number1 = 10;
$number2 = 20;

maketotal($number1, $number2);
echo "<br/>";



// Hàm return và khôn return
/**
 * 1. Hàm có từ khóa return => hàm return => có giá trị trả về
 *   a. Nếu từ khóa return dc gọi ra => các câu lệnh ở dưới không chạy nx
 * 
 * 2. Hàm không có từ khóa return => Hàm không return
 */
function doTotal($a, $b){
    $total = $a + $b;
    echo $total;
    return $total;
}

$total = doTotal(1, 2);
$total++;
echo $total;
echo "<br/>";



function getMessage($msg = null){
    if ($msg == null) {
        return;
    }
    return $msg;
}

$mess = getMessage();


/**
 * Biến cục bộ, biến toàn cục, biến tĩnh
 * 
 * 1. Biến cục bộ
 *  - Là biến được sử dụng trong phạm vi hẹp
 *  - Biến cục bộ không được sử dụng bên ngoài hàm hoặc trong hàm khác
 * 
 * 2. Biến toàn cục
 *  - Là biến được sử dụng trong phạm bi rộng
 *  - Biến toàn cục được sử dụng ở bất kì đâu
 *  - Muốn sử dụng bên trong hàm => Phải khai báo bằng từ khóa "global"
 * 
 * 3. Biến tĩnh
 *  - Không thay đổi giá trị khi gọi lại hàm
 */



 /**
  * Tham biến, tham trị, tham số, tham chiếu
  *  - Tham số: Những biến truyền vào khi định nghĩa hàm
  *  - Tham trị: Sử dụng khi gọi hàm: $number1, $number2; không thay đổi giá trị của biến truyền vào
  *  - Tham biến: Giống tham trị nhưng thay đổi giá trị của biến truyền vào.
  *  - Tham chiếu: khi $b thay đối => $a thay đổi theo
*/

function &hello(){
    static $hello = "Unicode";
    return;
}

$h =& $hello;
$h = "Hoc PHP";

echo $h;
echo "<br/>";
echo $hello;
echo "<br/>";

/**
 * Hàm không giới hạn tham số
 */

function getMes($str, ...$paramets) {
    // $paramets = func_get_args();
    // print_r($paramets);
    echo "str = $str ";
    print_r($paramets);
}

getMes("Unicode", 1, 2, 3);


echo "<br/>";
/**
 * Giải thuật đệ quy
 * Hiển thị dãy số fibonacci
 *  - Tính số fibonacci thứ n
 *  - Hiển thị n+1 số đầu tiên
 */

function fibonacci($n) {
    if ($n == 0 | $n == 1) {
        return $n;
    }

    return fibonacci($n - 1) + fibonacci($n - 2);
}

$n = 10; //Hiển thị n số đầu tiên
for ($i = 0; $i <= $n; $i++) {
    echo "fibonacci($i) ";
}