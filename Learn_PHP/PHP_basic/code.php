<?php
//1. Đặt tên biến
$bai_1;
$customerDetail_Email = 'andlp1912@gmail.com';
$customer_age = 30;
$customer_age = 28;

//2. In ra biến
echo $customer_age;
echo '<br/>'; // Khoảng cách dòng
echo $customerDetail_Email;
echo '<br/>';
echo '0968192222';

// comment
/* comment 1
comment 1
*/
echo '<br/>';

//4. Debug
var_dump($customer_age);
echo '<br/>';
print_r($customerDetail_Email);
echo'<br/>';

//5. Nối biến
$bien1 = 'Hoc PHP';
$bien2 = ' EUP';
echo $bien1.' ở'.$bien2;
echo '<br/>';
$bien3 = 'Di hoc';
$bien4 = ' nghi hoc';
echo $bien = $bien3.' hay'.$bien4;
echo '<br/>';
$html = '<a href=""><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARMAAAC3CAMAAAAGjUrGAAAAJ1BMVEVS5lles2ZM0W1+5iciiCxS6FdMz25Hz3GB6B+D7CcVfywbhCZitmnvvTAKAAABCElEQVR4nO3QQQGAIAAEMERARfrnpcN9+GwRVkqkj5p43jvxzZb41xXJSpw4ceLEiRMnTpw4ceLEiRMnTpw4ceLEiRMnTpw4ceLEiRMnTpw4ceLEiRMnTpw4ceLEiRMnTpw4ceLEiRMnTpw4ceLEiRMnTpw4ceLEiRMnTpw4ceLEiRMnTpw4ceLEiRMnTpw4ceLEiRMnTpw4ceLEiRMnTpw4ceLEiRMnTpw4ceLEiRMnTpw4ceLEiRMnTpw4ceLEiRMnTpw4ceLEiRMnTpw4ceLEiRMnTpw4ceLEiRMnTpw4ceLEiRMnTpw4ceLEiRMnTpw4ceLEiRMnTpw4ceLEiRMnTpw4OXuyAdPHrEGNCAzvAAAAAElFTkSuQmCC" ></a>';
echo $html;

echo '<br/>';
//6. Hằng số
define('WEB_XAMPP','http://hoangan.net');
echo WEB_XAMPP;
echo '<br/>';
//const WEB_XAMPP = 'C:/xampp/htdocs';
echo '<br/>';
$checkDefine = define('WEBXAMPP','http://hoangan.net'); //check xem hàm define có tồn tại k
var_dump($checkDefine);
echo '<br />';

//7. Kiểu dữ liệu
//a. Số nguyên
$age = 20; //khai báo
var_dump($age);//kiểm tra kiểu dữ liệu
echo '<br/>';

$age1 = 30.5;
var_dump($age1);
echo '<br/>';
echo 'The number is:'.' '.$age1 = (int)$age1; // Ép giá trị biến về kiểu dữ liệu int

echo '<br />';
$age2 = 41.4;
$checkint = is_int($age2); // kiểm tra có phải số nguyên k
var_dump($checkint);
echo '<br/>';
echo 'The int must be:'.' '.$age2 = (int)$age2;

//b. BOOLEAN
echo '<br />';
$check = 0;
$check = (bool)$check; //Ép kiểu boolean
var_dump($check);
echo '<br />';
$checkBool = is_bool($check); // check kiểu boolean True hay fault
var_dump($checkBool);

//f. NULL
$total = NULL;
$checkNull = is_null($total);
var_dump($total);
echo '<br />';
var_dump($checkNull);

//g. Resource
//$curl = curl_init();
//$checkType = get_resource_type($curl);
//var_dump($curl);

//h. Objects
$dataCustomer = [
    'Phúc An'
];
$dataCustomer = (object)$dataCustomer;
$checkObject = is_object($dataCustomer);
//var_dump($dataCustomer);
echo '<br />';
var_dump($checkObject);

//8. Toán tử
//a. Toán tử gán
$age = 30;

//9. Đoạn swich-case
$number = 1;
switch ($number){
    case '1':
        # code...
    break;
    case 2:

    break;
    case 3:

    break;
    default:

    break;
}
/*
 *Kiem tra thu trong tuan 
 * $num = 1 => Chu nhat
 * $num = 2 => Thu 2 
 * ....
 * $num = 7 => thứ 7
 */
echo "<br/>";
$number = 12;
switch ($number){
    case 1:
        echo "Hôm nay là chủ nhật";
    break;
    case 2:
        echo "Hôm nay là thứ 2";
        break;
    case 3:
        # code...
        echo "Hôm nay là thứ 3";
        break;
    case 4:
        echo "Hôm nay là thứ 4";
    break;
    case 5:
        echo "Hôm nay là thứ 5";
    break;
    case 6:
        echo "Hôm nay là thứ  6";
    break;
    case 7:
        echo "Hôm nay là thứ 7";
    break;
    default:
        echo "Error";
    break;
}

/**
 * Số ngày trong tháng
 * Nhập vào tháng, năm => trả về ngày 
 * Tháng 31 ngày: 1,3,5,7,8,10,12
 * Tháng 30 ngày: 4,6,9,11
 * Tháng 28/29 ngày: 2 (năm chia hết cho 4)
 * */
echo "<br/>";
$month = 2;
$year = 2023;
switch ($month) {
    case '2':
        if($year %4 == 0){
        echo "Tháng $month năm $year có 29 ngày";
        }else{
            echo "Tháng $month năm $year có 28 ngày";
        }
        break;
    case '4':
    case '6':
    case '9':
    case '11':
        echo "Tháng $month năm $year có 30 ngày";
        break;
    default:
        echo "Tháng $month năm $year có 31 ngày";
        break;
}

//10. Vòng lặp for
echo "<br/>";
//Xác định số lần lặp
$count = 20;
//Xác định giá trị ban đầu
$start = 0;
for ($i=$start; $i <= $count; $i+=2) { 
  echo "Đây là vòng lặp $i <br/>";
}

//Ví dụ 1: Tính tổng S=1+2+3+...+n
echo "<br/>";
$n = 10;
$s = 0;
for ($i=1; $i<=$n ; $i++) { 
    $s+=$i;
}
echo "Tổng = $s";
echo "<hr/>";

//Ví dụ 2: Vòng for giảm
$n = 10;
for ($i = $n; $i >= 1; $i--){
    echo "Đây là vòng giảm <br/>";
}
echo "<hr/>";
//Bài tập 1: Hiển thị số lẻ, số chẵn trong dãy 1 2 3 4 ... 100
/**
 * Gán 1 dãy số với số bắt đầu và kết thúc
 * Gán kết quả số chẵn và lẻ ở dạng null
 * gán số lượng số chẵn lẻ trong dãy = 0
 * kiểm tra xem n số nào chia hết cho 2 => in ra số chẵn
 * còn lại => in ra số lẻ
 */
$start = 1;
$end = 100;

$even = null;
$odd = null;

$evenCount = 0;
$oddCount = 0;
for ($i=$start; $i <= $end ; $i++){ 
    if($i%2==0){
        //echo "$i là số chẵn <br/>";
        $even.=$i.', ';
        $evenCount++;
    }else{
        //echo "$i là số lẻ <br/>";
        $odd.=$i.', ';
        $oddCount++;
    }
}
echo "Tìm thấy $evenCount số chẵn: $even <br/>";
echo "Số lẻ: $odd <br/>";


//break, continue
for ($i=$start; $i <= $end ; $i++){ 
     if ($i == 6) {
        continue;
     }
}

//Bài 2: Tính giai thừa của 1 số và hiển thị kết quả
/**
 * gán 1 số
 * kiểm tra xem số đó có lớn hơn 0 k
 * nếu <0 => in ra kq invalid
 * nếu >0 => Gán biến kết quả = 1
 * $result = 1 * $i+1 * $i+2 *...* biến đã gán
 */
echo "<br/>";
$num = 4;
if($num>0){
   $result = 1;
   for($i=$num; $i>=1; $i--){
    $result*=$i;
   }echo "$num! = $result <br/>";
}else{
    echo "Number invalid!";
}

//Bài 3: Kiểm tra 1 số có phải số nguyên tố hay không, hiển thị kết quả
/**
 * kiểm tra số nguyên tố:
 *   int lớn hơn 1
 *   chỉ chia hết cho 1 và chính nó
 * => Dùng phương pháp loại trừ: Tìm số chia hết cho số khác ngoài nó và 1
 * Gán cờ kiểm tra: $check = true
 * kiểm tra các số từ 2 đến n-1 xem n có chia hết cho số nào k
 * nếu có => kp số nto
 * nếu k => số nguyên tố
 */
$n = 4;
if($n>1){
    $check = true; // Gắn cờ kiểm tra số nguyên tố
    for($i = 2;$i<$n;$i++){
        if($n%$i==0){
            $check = false;
        }

    }
    if($check){
        echo "$n là số nguyên tố";
    }else{
        echo "$n không phải là số nguyên tố";
    }
}else{
    echo "$n không phải số nguyên tố";
}

//Bài 4: In bảng cửu chương
/**
 * Tạo table = html
 * dùng vòng lặp cho số nhân từ 1 đến 10
 * chia hàng bằng if
 */
?>
<table border="1" wight="100%" cellspacing="0" cellpadding="10">
    <>
        <?php
        for($i = 1; $i<= 10; $i++){ // Tạo vòng lặp cho số nhân 
            if($i==1  || $i==6){ // Chia hàng
                echo "<tr>";
            }
            echo "<td>"; // Chia cột
            for($j = 1; $j <= 10; $j++){ // Tạo vòng lặp cho số bị nhân
                $result= $i * $j; // Kết quả
                echo "$i x $j = $result <br/>";
            }
            echo "</td>";
  
        } ?>
    </tr>
</table>

<?php
// Bài 5: vẽ ô cờ vua bằng PHP

/**
 * dssfsd
 * sdf
 * dsf
 * sdf
 * sdf
 */
echo "<br/>";
?>
<table border="1" width="100%" cellpadding="0" cellspacing="0">
    <?php
    $alphaloop = '';
    for($row="a";$row<="h";$row++){
        $alphaloop.="<td> $row </td>";
    }
    echo "<tr><td></td> $alphaloop </tr>";



    $i=8;
    for($row=1;$row<=8;$row++){
        
        ?>
    <tr>
        <td>
            <?php echo "$i"; ?>
        </td>
        <?php for($col=1;$col<=8;$col++){
            if($row%2!=0){
                if($col%2!=0){
                    echo "<td style='background: #fff; width: 12.5%; height: 100px'></td>";
                }else{
                    echo "<td style='background: #000; width: 12.5%; height: 100px'></td>";
                }
            }else{
                if($col%2==0){
                    echo "<td style='background: #fff; width: 12.5%; height: 100px'></td>";
                }else{
                    echo "<td style='background: #000; width: 12.5%; height: 100px'></td>";
                }
            }
            ?>
        <?php } ?>
    </tr>
    <?php 
    $i--;
} ?>
</table>

<?php
//Bài 6: Vẽ tam giác sao cho số sao mỗi dòng tăng tăng
/**
 * Input: Số dòng N
 * output: tam giác vuông vs N dòng
 */
echo "<br/>";
 $n = 5;
 for ($row = 1; $row <= $n; $row++) { 
    for ($col = 1; $col <= $row; $col++) {
        if ($col < $row) { //Bỏ đi dấu cách giữa các dấu *
            echo "* ";
        }else {
            echo "*";
        }
    }
    echo "<br/>";
 }


echo "<br/>";
 //Bài 7: Vẽ tam giác đối xứng với Nx2 dòng
 /**
  * 
  */
$n = 5;
for ($row = 1; $row <= $n; $row++) {
    for($col = 1; $col <= $row; $col++){
        if($col < $row){
           echo "* ";
        }else{
            echo "*";
        }
    }
    echo "<br/>";
}
for ($row = $n; $row >= 1; $row--) {
    for($col = 1; $col <= $row; $col++){
        if ($col<$row) {
            echo "* ";
        } else {
            echo "*";
        }
    }
    echo "<br/>";
}
echo "<br/>";




//Bài 8: Vẽ tam giác số tăng dần vs N dòng
/**
 * Xác định n = 5
 * 
 */

$n = 5;
$count = 0;
for ($row = 1; $row <= $n; $row++) {
    for ($col = 1; $col <= $row; $col++){
        $count++;
        if($col < $row){
            echo "$count ";
        } else {
            echo "$count";
        };
    }
    echo "<br/>";
}

echo "<br/>";



//Vòng lặp while
$i = 0;
while ($i <= 10) { //Biểu diễn for = while
    echo " $i ";
    $i++; // Điều kiện của vòng lặp
}

echo "<br/>";
//Tính tổng S = 1+2+3+4+..+n
$n = 10;
$i = 1;
$total = 0;
while ($i <= $n) {
    $total+=$i;
    $i++;
}
echo "Tổng = $total";

echo "<br/>";
//Bài tổng phân số:
/**
 * S= 1/2 + 1/4 + 1/6 +...+ 1/n
 * Điều kiện: 1/n <0.0001
 */
$total = 0; // Giả định tổng bàng 0
$i = 2; // Giả định biến tăng
while (1/$i >= 0.0001) {
    $total += 1/$i;
    $i+=2;
}
echo $total;

echo "<br/>";

//Do While

$i = 1;
do {
    echo "$i ";
    $i++;
} while ($i <= 10);

echo "<br/>";
/**
 * Ví dụ 1: Tính tổng
 * //Bài tổng phân số:
 * S= 1/2 + 1/4 + 1/6 +...+ 1/n
 * Điều kiện: 1/n <0.0001
 */
$total = 0;
$i = 2;
do {
    $total += 1/$i;
    $i+=2;
} while (1/$i >= 0.0001);
echo "Tổng = $total";


