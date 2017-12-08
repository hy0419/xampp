<!DOCTYPE html>
<html lang="ja">
<head>
    <meta http-equiv="Content-Type" content=\'93Stext/html;charset=UTF-8" />
    <title>delete</title>
</head>
<body>
<form action="sql2.php">
    <button>削除</button>
<?php
    session_start();
    $banngou = filter_input(INPUT_POST,'banngou');
    $_SESSION['sql2'] = [$banngou];
    ?>
</form>
<form action="delete.php">
    <button>キャンセル</button>
</form>
</body>
</html>
