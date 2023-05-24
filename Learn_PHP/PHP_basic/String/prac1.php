 <?php
// Bài 1: Viết chương trình lấy username của 1 email

$email = "andlp@gmail.com";

// $endemail = strstr($email, '@');
// $username = str_replace($endemail, '', $email);
// echo $username;

$username = strstr($email, '@', true);
echo $username;
echo "<br/>";

//Bài 2: Viết chương trình lấy ra 5 kí tự cuối chuỗi
$str = "Hoc lap trinh tai UNICODE";
$endstr = substr($str, -5);
//$endstr = mb_substr($str, -5, null, 'UTF-8');
echo $endstr;
echo "<br/>";

//Bài 3: Xóa chữ đầu tiên
$str = "di de tro ve";
$positionSpace = mb_strpos($str, ' ', null, 'UTF-8');
//$leftLenght = mb_strlen($str, 'UTF-8') - ($positionSpace + 1);
$endWord = mb_substr($str, $positionSpace + 1, );
$str = $endWord;
echo $str;
echo "<br />";

// Bài 4: Viết chương trình đảo ngc chuwx đầu và cuối
$str = "Hoc Lap Trinh PHP tai UNICODE";

//Lấy chữ đầu tiên
$positionSpacefirst = mb_strpos($str, ' ', null, 'UTF-8');
$firstWord = mb_substr($str, 0, $positionSpacefirst, 'UTF-8');

//Lấy chữ cuối
$positionSpaceEnd = mb_strripos($str, ' ', null, 'UTF-8');
$leftLength = mb_strlen($str, 'UTF-8') - $positionSpaceEnd;
$endWord = mb_substr($str, $positionSpaceEnd + 1, $leftLength, 'UTF-8');

//Lấy nội dung còn lại
$middleWord = mb_substr($str, $positionSpacefirst, $positionSpaceEnd - $positionSpacefirst + 1, 'UTF-8');

//Chèn và đổi chỗ
$str = $endWord.$middleWord.$firstWord;
echo $str;
echo "<br />";

//Bài 5: Nhập tên 1 người, In ra họ tên đệm và tên
$fullName = "Đặng Lê Phúc An";

$positionSpaceEnd = mb_strripos($fullName, ' ', null, 'UTF-8');
$leftLength = mb_strlen($fullName, 'UTF-8') - ($positionSpaceEnd);
$lastName = mb_substr($fullName , $positionSpaceEnd, $leftLength, 'UTF-8');

$firstName = mb_substr($fullName, 0, $positionSpaceEnd, 'UTF-8');

echo "First name: $firstName <br/> Last name: $lastName";
echo "<br/>";

//Bài 6: Viết hàm in ra 50 chữ đầu tiên của chuỗi
$content = "Tiếp tục quán triệt và thực hiện nghiêm các chỉ đạo của Chính phủ, Thủ tướng Chính phủ trong công tác phòng chống dịch Covid-19 và các dịch bệnh truyền nhiễm khác; tuyệt đối không được chủ quan, lơ là, mất cảnh giác và thực hiện hiệu quả các biện pháp phòng, chống dịch theo Nghị quyết số 38/NQ- CP ngày 17-3-2022 của Chính phủ và Kế hoạch phòng, chống bệnh truyền nhiễm năm 2023 tại Quyết định số 1331/QĐ-BYT ngày 10-3-2023 của Bộ Y tế.";

$contentLength = mb_strlen($content, 'UTF-8');
$result = null;
$count = 0;
$limit = 50;

for ($i = 0; $i < $contentLength; $i++){
    $result .= mb_substr($content, $i, 1, 'UTF-8');
    if (mb_substr($content, $i, 1, 'UTF-8') == ' '){
        $count++;
        if ($count >= $limit) {
            break;
        }
    }
}
echo $result;
echo "<br />";

//Bài 7: Viết chương trình kiểm tra độ mạnh của mật khẩu
$password = "ABCD";
$number = "123456789";
$symbol = "!@#$%^&*()_+";
$checkLenght = false;
$checkNumber = false;
$checkLower = false;
$checkUpper = false;
$checkSymbol = false;


if (mb_strlen($password, 'UTF-8') >= 6) {
    $checkLenght = true;
}

for ($i = 0; $i <= mb_strlen($password, 'UTF-8'); $i++){
    $char = mb_substr($password, $i, 1, 'UTF-8');
    if (mb_strpos($number, $char, null, 'UTF-8') != false){
        $checkNumber = true;
        //break;
    }

    if ($char >= "a" && $char <= "z"){
        $checkLower = true;
    }

    if ($char >= "A" && $char <= "Z"){
        $checkUpper = true;
    }
    if (mb_strpos($symbol, $char, null, 'UTF-8') != false){
        $checkSymbol = true;
    }
}

if ($checkLenght && $checkNumber && $checkLower && $checkSymbol){
    echo "Mật khẩu mạnh";
} else {
    echo "Mật khẩu yếu";
}
echo "<br />";

