<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>delete</title>
</head>
<body>
<h1>登録２</h1>
<form action="sql.php">
    <button>登録</button>
<?php
session_start();
$banngou = filter_input(INPUT_POST,'banngou');
$name = filter_input(INPUT_POST,'name');
$seibetu = filter_input(INPUT_POST,'seibetu');
$bukatu = filter_input(INPUT_POST,'bukatu');

$_SESSION['sql']=[$banngou,$name,$seibetu,$bukatu];


?>
</form>
<form action="form.php">
    <button>キャンセル</button>
</form>
</body>
</html>
