<?php

session_start();

if (! $_SESSION['auth']) {
    header('Location: login.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>多摩</title>
</head>

<body>
    <h1>多摩</h1>
</body>
</html>
