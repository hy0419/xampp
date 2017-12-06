<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>update2</title>
</head>
<form action="start.php">
    <button>更新</button>
<?php
    require_once __DIR__."/key/XamppAccess.php";
    $sql = 'UPDATE My_class(name,seibetu,bukatu) SET (:name,:seibetu;bukatu) WHERE banngou = :banngou';
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
<form action="update.php">
    <button>キャンセル</button>
</form>
</html>
