<?php
session_start();
$num=$_POST['banngou'];

require_once __DIR__."/key/XamppAccess.php";
$sql = 'SELECT * FROM My_class WHERE banngou='.$num;
$stmt = dbAccess()->prepare($sql);
$stmt->execute();

while($array = $stmt->fetch(PDO::FETCH_ASSOC)) {

    $array['banngou'];
    $n = $array['name'];
    $s = $array['seibetu'];
    $b = $array['bukatu'];
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>update2</title>
</head>
<form method="post" action="sql3.php">
<p>学籍番号：<?php
    echo $num;
    ?></p>
<p>名前：<br>
    <input type="text" name="name" value="<?php
    echo $n;
    ?>"></p>
<p>性別：<br>
    <input type="text" name="seibetu"value="<?php
    echo $s;
    ?>"></p>
<p>部活：<br>
    <input type="text" name="bukatu" value="<?php
    echo $b;
    ?>"></p>
    <button>更新</button>

</form>
<form action="update.php">
    <button>キャンセル</button>
<?php


?>
</form>
</html>
