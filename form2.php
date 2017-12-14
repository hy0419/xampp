<?php
session_start();
$banngou = filter_input(INPUT_POST,'banngou');
$name = filter_input(INPUT_POST,'name');
$seibetu = filter_input(INPUT_POST,'seibetu');
$bukatu = filter_input(INPUT_POST,'bukatu');

$_SESSION['sql']=[$banngou,$name,$seibetu,$bukatu];


?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>form</title>
</head>
<body>
<h1>確認画面</h1>
<p>
    <?php
    echo "学籍番号 : ".$banngou;
    ?><br>
    <?php
    echo "名前 : ".$name;
    ?><br>
    <?php
    echo "性別 : ".$seibetu;
    ?><br>
    <?php
    echo "部活　: ".$bukatu;
    ?>
</p>
<form action="sql.php">
    <button>登録</button>

</form>
<form action="form.php">
    <button>キャンセル</button>
</form>
</body>
</html>
