<?php
require_once "function.php";
?>

<h3>DANH SACH KHACH HANG</h3>
<hr/>

<?php
if (!empty ($_GET["message"])) {
    $messageCode = $_GET["message"];
    echo get_message($messageCode);
}
?>