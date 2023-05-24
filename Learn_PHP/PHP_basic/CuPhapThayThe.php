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




/**
 * 1. Cú pháp thay thế 3 ngôi
 *    Cú pháp: bieu_thuc_dieu_kien?ket_qua_dung : ket_qua_sai;
 * 
 *    Lưu ý: 
 *       + Gắn với 1 biểu thức
 *       + Luôn luôn phải có kết quả sai (Nếu k muốn hiển thị thì để null, " ", false, trống)
 * 
 * 
 * 2. Cú pháp thay thế if
 *       if():
 *       ?>
 *          Đoạn html
 *       <?php
 *       else:
 *       endif;
 * 
 * 
 * 3. Cú pháp thay thế for
 *       for():
 *       echo $i
 *       endfor;
 * 
 * 
 * 4. Cú pháp thay thế while
 *       while ():
 *       echo $i;
 *       $i++;
 *       endwhile;
 * 
 * 
 * 5. Cú pháp thay thế foreach
 *       foreach():
 *       echo $item;
 *       endforeach;
 */

$number = 10;
//  if ($number == 10) {
//     echo "Bạn đủ tuổi";
//  } else {
//     echo "Bạn không đủ tuổi";
//  }
echo "<br/>";
 //1. Toán tử 3 ngôi: Viết các câu lệnh rẽ nhánh đơn giản hơn
echo $number == 10? "Bạn đủ tuổi" : "Bạn không đủ tuổi";


// $printStr = $number == 10? "Bạn đủ tuổi" : "Bạn không đủ tuổi";
// echo "$printStr";