<?php
/**
 * Xử lý thời gian trong PHP
 *   - Timestamp: Tính tử 0h0'0s 1/1/1970 đến thời điểm cần xác định
 *   - Định dạng thời gian
 *   - Time zone // php.net => Timezone
 *   - Đối tượng thời gian (Datetime Object)
 * 
 */


date_default_timezone_set("Asia/Ho_Chi_Minh");
echo date("d/m/Y H:i:s");
echo "<br/>";

echo "<br/> ================== <br/>";



// Hàm time() : Timestamp
$timestamp = time();
echo "Timestamp $timestamp";

echo "<br/> ================== <br/>";



// Hàm strtotime(): phân tích chuỗi thời gian bằng tiếng anh thành dạng timestamp của thời gian đó
$timestamp = strtotime(date("Y-m-d 00:00:00"));
echo "Convert " . date("Y-m-d 00:00:00") . " ".  "to Timestamp" .$timestamp;

echo "<br/> ================== <br/>";



// Hàm xuất tgian

echo "Timestamp: " . $timestamp . "<br/>";
$datetime = strftime( "%d/%m/%Y %H:%M:%S", $timestamp);
echo $datetime;

echo "<br/> ================== <br/>";



// Hàm mktime($hour, $minute, $second, $month, $day, $year)

$datetime = mktime(13, 30, 40, 05, 23, 2023);
var_dump($datetime);

echo "<br/> ================== <br/>";




// Hàm microtime(): Lấy timestap của thời điểm hiện tại bao gồm cả microseconds.

$microtime = microtime();
echo $microtime;

echo "<br/> ================== <br/>";


// Hàm localtime(): Lấy thông tin về thời gian bao gồm h phút giây ngày tháng năm dựa vào timestamo của thời điểm đó
/**
 * "tm_sec":   số giây;
 * "tm_min":   số phút;
 * "tm_hour":  số giờ;
 * "tm_mday":  ngày;
 * "tm_mon":   tháng;
 * "tm_year":  năm thứ bao nhiêu tính từ 1900;
 * "tm_wday":  ngày thứ mấy trong tuần, từ 0-6;
 * "tm_yday":  ngày thứ bao nhiêu trong năm
 * "tm_isdst": daylight savings có hiệu lực không, giá trị > 0 => có, gtri = 0 => không, gtri < 0 => không xác định
 */

$localtime = localtime($timestamp, true);
echo "<pre>";
print_r($localtime);
echo "</pre>";

echo "Ngày hôm nay: " . $localtime["tm_mday"] . "<br/>"; 

echo "<br/> ================== <br/>";



// Hàm idate(); : Trả về 1 số nguyên được định dạng theo dạng cho trước dựa vào timestamp của 1 thời điểm nào đó. Nếu không có timestamp truyền vào, hàm sẽ lấy timestamp của thời điểm hiện tại

$idate = idate("Y", $timestamp); // Chỉ lấy dc riêng lẻ từng giá trị m,d,y
echo $idate;

echo "<br/> ================== <br/>";




// Hàm gmmktime(): Lấy timestamp của 1 thời điểm nào đó. Tuy nhiên, khác vs mktime(), nó sẽ ấy timestamp ở múi h 0(GMT).

$gmmktime = gmmktime(15, 06, 00);
echo $gmmktime;

echo "<br/> ================== <br/>";


// Hàm gmdate(); lấy múi h 0(GMT)
$gmdate = gmdate("Y-m-d H:i:s", $timestamp);
echo $gmdate;

echo "<br/> ================== <br/>";


// Hàm getdate() : Lấy thông tin theo múi h tùy chỉnh

$getdate = getdate();
echo "<pre>";
print_r($getdate);
echo "</pre>";


echo "<br/> ================== <br/>";



// Hàm dtae() : Lấy theo múi h hiện tại
$date = date("Y-m-d H:i:s", $timestamp);
echo $date;

echo "<br/> ================== <br/>";
echo "<br/> ================== <br/>";
echo "<br/> ================== <br/>";



// Hàm khởi tạo Object timezone

$timezoneObject = timezone_open("Asia/Ho_Chi_Minh");
echo "<pre>";
print_r($timezoneObject);
echo "</pre>";
echo "<br/> ================== <br/>";


$dateTimeObject = date_create( "", $timezoneObject);
var_dump($dateTimeObject);
echo "<br/> ================== <br/>";


$format = "d/m/Y";
$dateTimeStr = "23/05/2023";
$dateTimeObjects = date_create_from_format($format, $dateTimeStr); // Tạo ra object từ biến thời gian
var_dump($dateTimeObjects);
echo "<br/> ================== <br/>";



echo "<br/> ================== <br/>";
echo "<br/> ================== <br/>";
echo "<br/> ================== <br/>";



// hàm date_timezone_set() : Thiết lập timezone cho đối tượng thời gian dc truyền vào

// Cú pháp: date_timezone_set($object, $timezone)
// $object là đối tượng cần thiết lập lại timezone
// $timezone là timezone sẽ thiết lập cho đối tượng


$dateObject = date_create();
$timeZoneObject = timezone_open("Asia/Ho_Chi_Minh");
date_timezone_set($dateObject, $timeZoneObject);
var_dump($dateObject);

echo "<br/> ================== <br/>";


// hàm date_timezone_get()

$timeZoneCurrent = date_timezone_get($dateObject);
var_dump($timeZoneCurrent);
echo "<br/> ================== <br/>";



// hàm date_timestamp_set()
$DateObject = date_create();
var_dump($DateObject);
echo "<br/>";
echo "<br/>";

$timestamp = strtotime("2023-05-23 12:00:00");
date_timestamp_set($DateObject, $timestamp);
var_dump($DateObject);

echo "<br/> ================== <br/>";

date_timestamp_get($DateObject);
var_dump($DateObject);
echo "<br/> ================== <br/>";


// Hàm date_time_set: Đặt lại thời gian giờ phút giây
$date = date_create();
date_time_set($date, 15, 35);
echo date_format($date, "Y-m-d H:i:s");

echo "<br/> ================== <br/>";


// Hàm date_sub(): Trừ đi khoảng thời gian nhất định từ đối tượng mốc thời gian truyền vào ban đầu
$dateInterval = date_interval_create_from_date_string("2 days");
date_sub($dateObject, $dateInterval);
echo "<br/> ================== <br/>";


// Hàm date_parse(): Lấy thông tin chi tiết của 1 chuỗi thời gian được truyền vào 
$dateStr = "2023-05-23 10:00:00";
$dateArr = date_parse($dateStr);
echo "<pre>";
print_r($dateArr);
echo "</pre>";
echo "<br/> ================== <br/>";

// Hàm date_modify(): Thay đổi mốc thời gian
date_modify($dateObject, "+ 2 month + 1 week + 5 hour");
echo "<br/> ================== <br/>";

// Hàm date_input(): Nhập thời gian
$dateInput = "2023-05-23 15:58:00";
$dateObject = date_create($dateInput);

$d = date_format($dateObject, "d");
$m = date_format($dateObject, "m");
$y = date_format($dateObject, "Y");
$h = date_format($dateObject, "h");
$i = date_format($dateObject, "i");
$s = date_format($dateObject, "s");

echo "Ngày $d, tháng $m, năm $y, $h giờ, $i phút, $s giây";
echo "<br/> ================== <br/>";



// Hàm date_diff(): Xem số ngày còn lại

$dateStart = "2023-05-23";
$dateEnd = "2023-10-18";
$dateStartObject = date_create($dateStart);
$dateEndObject = date_create($dateEnd);
$interval = date_diff($dateStartObject, $dateEndObject);
echo $interval->format("%d ngày, %m tháng, %y năm");
echo "<br/> ================== <br/>";


// Hàm date_add(): Ngược lại với date_sub()


// Hàm timezone_name_get(); Trả về tên timezone
$timezoneObject = timezone_open("Asia/Ho_Chi_Minh");
echo timezone_name_get($timezoneObject);
echo "<br/> ================== <br/>";

// Hàm timezone_location_get(); Trả về tên timezone location
$timezone = date_default_timezone_get();
echo $timezone;
echo "<br/>";
$arr = timezone_location_get(timezone_open($timezone));
echo "<pre>";
print_r($arr);
echo "</pre>";

echo "<br/> ================== <br/>";



// Hàm timezone_location_set();
date_default_timezone_set("Asia/Ho_Chi_Minh");
$currentDate = date("Y-m-d H:i:s");
echo $currentDate;
$currentTimestamp = strtotime($currentDate);
echo $currentTimestamp; 
echo "<br/>";
$endDateTimestamp = strtotime("+1 year", $currentTimestamp);
echo date("Y-m-d H:i:s", $endDateTimestamp);





