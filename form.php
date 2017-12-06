<!DOCTYPE html>
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content=\'93Stext/html;charset=UTF-8" />
<title>form</title>
</head>
<body>

<form action="form2.php" method="post">
<p>学籍番号：<br>
<input type="text" name="banngou"></p>
<p>名前：<br>
<input type="text" name="name"></p>
<p>性別：<br>
<input type="text" name="seibetu"></p>
<p>部活：<br>
<input type="text" name="bukatu"></p>

<button>登録</button>

<p>

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
</p>
</form>
<form action="start.php">
    <button>戻る</button>
</form>
</body>
</html>
