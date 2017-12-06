<!DOCTYPE html>
<html lang="ja">
<head>
    <meta http-equiv="Content-Type" content=\'93Stext/html;charset=UTF-8" />
    <title>delete</title>
</head>
<body>
<form action="start.php">
    <button>削除</button>
<?php
    require_once __DIR__."/key/XamppAccess.php";
    $sql = 'DELETE FROM My_class WHERE  banngou = :banngou';
    $stmt = dbAccess()->prepare($sql);


    $stmt -> bindParam(':banngou',$banngou,PDO::PARAM_STR);

    $banngou = filter_input(INPUT_POST,'banngou');
    $stmt -> execute();
    ?>
</form>
<form action="delete.php">
    <button>キャンセル</button>
</form>
</body>
</html>
