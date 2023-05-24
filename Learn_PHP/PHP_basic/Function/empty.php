<?php
/**
 * Empty() function
 * 
 * Trả về kiểu dữ liệu boolean()
 * Trả về true nếu:
 *  + Không tồn tại => !isset($variable)
 *  + Rỗng, =0, trống, null, array rỗng, object rỗng (Phải ép kiểu sang array), false
 * 
 * Ứng dụng: Kiểm tra biến tồn tại và có dữ liệu
 */

$str = "Unicode";

// $check = empty($str);
// var_dump($check);

if (!empty($str)) {
    echo $str;
} else {
    echo "Not valiable";
}