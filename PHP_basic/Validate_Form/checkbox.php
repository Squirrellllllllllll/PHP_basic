<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["hobits"])) {
        $hobits = $_POST["hobits"];
        foreach ($hobits as $item) {
            echo "$item <br/>";
        }
    }
}

?>





<form method="post" action="">
    <p>Sở thích</p>
    <p>
        <!-- Sau khi submit vx giữ nguyên dấu tích đã tích -->
        <input type="checkbox" name="hobits[]" value="1" <?php echo (!empty($_POST["hobits"]) && in_array(1, $_POST["hobits"])?"checked":false) ?>>Sở thích 1
    </p>

    <p>
        <input type="checkbox" name="hobits[]" value="2" <?php echo (!empty($_POST["hobits"]) && in_array(2, $_POST["hobits"])?"checked":false) ?>>Sở thích 2
    </p>

    <p>
        <input type="checkbox" name="hobits[]" value="3" <?php echo (!empty($_POST["hobits"]) && in_array(3, $_POST["hobits"])?"checked":false) ?>>Sở thích 3
    </p>
    <button type="submit">Submit</button>
</form>