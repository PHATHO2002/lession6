<?php
$accountPattern = '/^[_a-z0-9]{6,}$/';

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
        <label for="">nhập vào account</label>
        <input type="text" name="account">
        <input type="submit" value="check">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (!empty($_POST["account"])) {
            $isEmail = checkText(trim($_POST["account"]), $accountPattern);
            if ($isEmail) {
                echo "<p>account hợp lệ</p>";
            } else {
                echo "<p> account ko hợp lệ</p>";
            }
        } else {
            echo "<p> dữ liệu không được để trống </p>";
        }
    }
    ?>
</body>

</html>