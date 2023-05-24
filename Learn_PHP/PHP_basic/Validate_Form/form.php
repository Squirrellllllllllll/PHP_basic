<?php

/**
 * 1. Validate Form là gì?
 *   - Xác thực dữ liệu trước khi xử lý
 *   - Có 2 loại:
 *     + Validate Client: Thẻ HTML 5, Js
 *     + Validate Server: PHP
 * 
 * 2. Quy trình validate form
 *   - Bước 1: Xác định được rules (Field này => Điều kiện gì)
 *   - Bước 2: Xác định được message (TƯơng ứng với rules)
 *   - Bước 3: Thực hiện chạy validate
 */

?>


<?php
/**
 * Rules: 
 *  fullname: Phải nhập, lớn hơn 5 ký tự
 *  email: phải nhập bằng định dang email
 *  age: phải nhập, số, nguyên dương
 */

 require_once "function.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    //Khai báo mảng để chứa lỗi
    $error = [];

    //validate fullname
    if (empty(trim($_POST["fullname"]))) {
        $error["fullname"]["require"] = "Họ tên không được để trống";
    }else {
        if (strlen(trim($_POST["fullname"])) < 5) {
            $error["fullname"]["min"] = "Họ và tên phải nhiều hơn 5 ký tự";
        }
    }


    //validate email
    if (empty(trim($_POST["email"]))) {
        $error["email"]["require"] = "Email không được để trống";
    }else {
        if (!filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL)) {
            $error["email"]["invalid"] = "Email không đúng format";
        }
    }


    //validate age
    if (empty(trim($_POST["age"]))) {
        $error["age"]["require"] = "Tuổi không được để trống";
    }else {
        if (!filter_var(trim($_POST["age"]), FILTER_VALIDATE_INT, [
            "option" => ["min" >= 1]
        ])) {
            $error["age"]["invalid"] = "Tuổi không đúng format";
        }
    }

    if (empty($error)) {
        redirect("list.php?message=1");

    }else {
        echo "Validate không thành công <br/>";
    }
        // echo "<pre>";
        // print_r($error);
        // echo "</pre>";
}
?>


<form action="" method="post">
    <p>
        Họ và Tên: <br/>
        <input type="text" name="fullname" placeholder="Họ và tên......" value="<?php echo (!empty($_POST["fullname"]))?$_POST["fullname"]: false ?>">

        <?php //Toán tử 3 ngôi để kiểm tra dkien và chạy khi error
        echo (!empty($error["fullname"]["require"]))?"<span style=\"color: red;\">" . $error["fullname"]["require"] . "</span>": false;
        echo (!empty($error["fullname"]["min"]))?"<span style=\"color: red;\">" . $error["fullname"]["min"] . "</span>": false;
        ?>

    </p>
    <p>
        Email: <br/>
        <input type="text" name="email" placeholder="Email......" value="<?php echo (!empty($_POST["email"]))?$_POST["email"]: false ?>">

        <?php
        echo (!empty($error["email"]["require"]))?"<span style=\"color: red;\">" . $error["email"]["require"] . "</span>": false;
        echo (!empty($error["email"]["invalid"]))?"<span style=\"color: red;\">" . $error["email"]["invalid"] . "</span>": false;
        ?>

    </p>
    <p>
        Tuổi: <br/>
        <input type="text" name="age" placeholder="Tuổi......" value="<?php echo (!empty($_POST["age"]))?$_POST["age"]: false ?>">

        <?php
        echo (!empty($error["age"]["require"]))?"<span style=\"color: red;\">" . $error["age"]["require"] . "</span>": false;
        echo (!empty($error["age"]["invalid"]))?"<span style=\"color: red;\">" . $error["fullname"]["invalid"] . "</span>": false;
        ?>

    </p>
    <p>
        <button type="submit">Submit</button>
    </p>
</form>