<?php

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

if(isset($_POST["submit"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    echo "Username: $username <br/>";
    echo "Email: $email";
}

if(isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    echo "Username: $username <br/>";
    echo "Password: $password";
}


?>


<form method="post" action="">
    <p>
        <input type="text" name="username" placeholder="Username">
    </p>

    <p>
        <input type="text" name="email" placeholder="Email">
    </p>

    <p>
        <button type="submit" name="submit">Submit</button>
    </p>
</form>

<form method="post" action="">
    <p>
        <input type="text" name="username" placeholder="Username">
    </p>

    <p>
        <input type="text" name="password" placeholder="Password">
    </p>

    <p>
        <button type="submit" name="login">Login</button>
    </p>
</form>

