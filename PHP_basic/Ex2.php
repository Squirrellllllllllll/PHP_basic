<?php

//Bai 1: Tạo một mảng chứa các số nguyên từ 1 đến 10. Sử dụng vòng lặp để in ra tất cả các số trong mảng. (Sử dụng vòng lặp for, foreach, while. Làm 3 lần, mỗi lần sử dụng loại vòng lặp khác nhau)
$numberArr = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'];

//for
for ($index = 1; $index <= 10; $index++) {
    echo "$index </br>";
}
echo "<br/> ====================";


//foreach
foreach ($numberArr as $value) {
    echo "$value <br/>";
}
echo "<br/> ====================";


//while
$i = 0;
while ($i < count($numberArr)) {
    echo "$numberArr[$i] <br/>";
    $i++;
}
echo "<br/>";



//Bai 2: Tạo một mảng chứa tên của các quốc gia: "Việt Nam", "Nga", "Mỹ", "Tàu Khựa". Sử dụng vòng lặp while để in ra tất cả các tên trong mảng, ngoại trừ quốc gia "Tàu Khựa" thì không được in ra. (In Mỗi quốc gia ra 1 dòng riêng)
$countryArr = [
    'Việt Nam',
    'Tàu Khựa',
    'Nga',
    'Mỹ',
];

// echo '<pre>';
// print_r($countryArr);
// echo'</pre>';

$index = 0;
while ($index < count($countryArr)) {
    // if($item != 3) {
    //     echo "$countryArr[$item] <br/>";
    //     $item++;
    // }
    // else {
    //     break;
    // }
    if ($countryArr[$index] != 'Tàu Khựa') {
        echo "$countryArr[$index] <br/>";
    }
    $index++;
}
echo "<br />";


//Bai 3: Vẫn là một mảng chứa tên của các quốc gia: "Việt Nam", "Nga", "Mỹ", "Tàu Khựa" như trên. Lặp in ra từng quốc gia trong mảng, nhưng khi in đến quốc gia Mỹ thì kết thúc, không in ra nữa.
$nameArr = [
    'Việt Nam',
    'Nga',
    'Mỹ',
    'Tàu Khựa',
];

// for ($index = 0; $index <= count($nameArr); $index++) {
//     if ($index <= 2) {
//         echo "$nameArr[$index] <br/>";
//     }
//     else {
//         break;
//     }
// }
$index = 0;
while ($index < count($nameArr)) {
    if($nameArr[$index] != 'Mỹ') {
        echo "$nameArr[$index] <br/>";
    } else {
        break;
    }
    $index++;
}
echo "<br />";




//Bai 4: Tạo một mảng chứa các giá trị từ 1 đến 5. Sử dụng vòng for, hoặc foreach, hoặc while, hoặc do while bất kì để tính tổng các giá trị trong mảng.

$totalArr = ['1', '2', '3', '4', '5'];
echo "Tổng =". " ". array_sum($totalArr);