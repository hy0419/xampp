<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>start</title>
</head>
<form action="form.php"method="post">
    <button>登録</button>
</form>
<form action="delete.php">
    <button>削除</button>
</form>
<form action="update.php">
    <button>更新</button>
</form>
    <p>
        <?php
            $dsn = 'mysql:dbname=My_gakunenn;host=localhost';
            $user = 'root';
            $password = '';
            try {
                $dbh = new PDO($dsn, $user, $password);
                $sql = 'SELECT * REOM My_class';
                $stmt = $dbh->prepare($sql);
                $stmt->execute();
            }

            catch (PDOException $e){
                print ('Eroor:'.$e->getMessage());
                die();
            }





        ?>
    </p>
</body>
</html>
