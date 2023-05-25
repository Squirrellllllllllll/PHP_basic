<?php

// Lấy dữ liệu từ url xuống
/**
 * Query String: (Bắt đầu từ dấu ? && các ptu cách nhau bởi dấu &)
 */



// echo "<pre>";
// print_r($_GET);
// echo "</pre>";
// $_GET["Name"] = "Lâm"; : Thay đổi value của thành phần theo key

if (isset($_GET["Name"])) {
    $username = $_GET["Name"];
}

if (isset($_GET["Email"])) {
    $email = $_GET["Email"];
}

if (isset($_GET["Age"]) && is_numeric($_GET["Age"])) {
    $age = $_GET["Age"];
}

echo "Name: $username <br/>";
echo "Email: $email <br/>";
echo "Age: $age <br/>";