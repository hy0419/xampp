<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>start</title>
</head>
<body>
<h1>スタート</h1>
<?php
    require_once __DIR__."/key/XamppAccess.php";
    $sql = 'SELECT * FROM My_class';
    $stmt = dbAccess()->prepare($sql);
    $stmt->execute();

    while($array = $stmt->fetch(PDO::FETCH_ASSOC)) {

        echo $array['banngou'].',';
        echo $array['name'].',';
        echo $array['seibetu'].',';
        echo $array['bukatu'];
        echo '<br>';
}
?>
</p>
<form action="form.php"method="post">
    <button>登録</button>
</form>
<form action="delete.php"method="post">
    <button>削除</button>
</form>
<form action="update.php"method="post">
    <button>更新</button>
</form>
    <p>

</body>
</html>
