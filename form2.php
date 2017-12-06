<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>delete</title>
</head>
<form action="start.php">
    <button>登録</button>
<?php
    require_once __DIR__."/key/XamppAccess.php";
    $sql = 'INSERT INTO My_class(banngou,name,seibetu,bukatu) VALUES(:banngou,:name,:seibetu,:bukatu)';
    $stmt = dbAccess()->prepare($sql);


    $stmt->bindParam(':banngou',$banngou,PDO::PARAM_STR);
    $stmt->bindParam(':name',$name,PDO::PARAM_STR);
    $stmt->bindParam(':seibetu',$seibetu,PDO::PARAM_STR);
    $stmt->bindParam(':bukatu',$bukatu,PDO::PARAM_STR);

    $banngou = filter_input(INPUT_POST,'banngou');
    $name = filter_input(INPUT_POST,'name');
    $seibetu = filter_input(INPUT_POST,'seibetu');
    $bukatu = filter_input(INPUT_POST,'bukatu');

    $stmt->execute();




?>
</form>
<form action="form.php">
    <button>キャンセル</button>
</form>
</html>
