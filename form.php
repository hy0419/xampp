<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content=\'93Stext/html;charset=UTF-8" />
<title>form</title>
</head>
<body>

<form action="form.php" method="post">
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
    $dsn = 'mysql:dbname=My_gakunenn;host=localhost';
    $user = 'root';
    $password = '';
    try{
        $dbh = new PDO($dsn,$user,$password);
       
      
        
        $sql = 'INSERT INTO My_class(banngou,name,seibetu,bukatu) VALUES(:banngou,:name,:seibetu,:bukatu)';
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':banngou',$banngou,PDO::PARAM_STR);
        $stmt->bindParam(':name',$name,PDO::PARAM_STR);
        $stmt->bindParam(':seibetu',$seibetu,PDO::PARAM_STR);
        $stmt->bindParam(':bukatu',$bukatu,PDO::PARAM_STR);
        
        $banngou = filter_input(INPUT_POST,'banngou');
        $name = filter_input(INPUT_POST,'name');
        $seibetu = filter_input(INPUT_POST,'seibetu');
        $bukatu = filter_input(INPUT_POST,'bukatu');
        
        $stmt->execute();
        
    }
    
    catch (PDOException $e){
        print ('Eroor:'.$e->getMessage());
        die();
    }
    ?>
</p>
</form>
<form action="start.php">
    <button>戻る</button>
</form>
</body>
</html>
