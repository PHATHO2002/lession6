<?php
$emailPattern = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';

function checkText($Email, $pattern)
{
    return preg_match($pattern, $Email);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <label for="">nhập vào email</label>
        <input type="text" name="mail">
        <input type="submit" value="check">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (!empty($_POST["mail"])) {
            $isEmail = checkText(trim($_POST["mail"]), $emailPattern);
            if ($isEmail) {
                echo "<p> email  hợp lệ</p>";
            } else {
                echo "<p>  email không hợp lệ </p>";
            }
        } else {
            echo "<p> dữ liệu không được để trống </p>";
        }
    }
    ?>
</body>

</html>