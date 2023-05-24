<?php
$messageArr = [
    1 => "Thêm Mới Thành Công",
    2 => "Sửa Thành Công",
    3 => "Thêm Mới Thành Công"
];

function redirect($path) {
    header("Location: $path");
    exit;
}

function get_message($code) {
    global $messageArr;
    if (array_key_exists($code, $messageArr)) {
        return $messageArr[$code];
    }
    return false;
}