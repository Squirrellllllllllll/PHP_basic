<?php

$data = [
    "Tin tức",
    "Sản phẩm"
];

foreach ($data as $item) { // Loại bỏ % ở url
    $url = $item;
    $url = "?module=" . urlencode($url);
    echo "<a href=\" $url \">$item</a> </br>";
}

if (!empty($_GET["module"])) {
    $module = urldecode($_GET["module"]); //decode
    echo $module;
}
echo "<br/>====================";

// Lấy các thông tin: Server, host, root,.....
echo "<pre>";
print_r($_SERVER);  // Các thông tin của server
echo "</pre>";

$decode = urldecode($_SERVER["QUERY_STRING"]);
echo "Query String: " . $decode;


echo "<br/>====================";