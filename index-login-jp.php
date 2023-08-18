<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // データベース接続の設定
    $dbHost = "localhost";
    $dbUser = "username";
    $dbPass = "password";
    $dbName = "database_name";

    $conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

    if ($conn->connect_error) {
        die("データベース接続エラー: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $_SESSION["username"] = $username;
        header("Location: dashboard.php"); // ログイン後のページへリダイレクト
    } else {
        $error = "ユーザー名またはパスワードが間違っています。";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>ログイン</title>
</head>
<body>
    <h2>ログイン</h2>
    <form method="post" action="">
        <label for="username">ユーザー名:</label>
        <input type="text" name="username" required><br>
        <label for="password">パスワード:</label>
        <input type="password" name="password" required><br>
        <input type="submit" value="ログイン">
    </form>
    <?php if (isset($error)) { echo $error; } ?>
</body>
</html>
