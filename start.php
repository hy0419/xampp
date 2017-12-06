<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>start</title>
</head>
<body>
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
        <?php
            require_once __DIR__."/key/XamppAccess.php";
                $sql = 'SELECT * FROM My_class';
                $stmt = dbaccess()->prepare($sql);
                $stmt->execute();

            while($array = $stmt->fetch(PDO::FETCH_ASSOC)) {

                print $array['banngou'].',';
                print $array['name'].',';
                print $array['seibetu'].',';
                print $array['bukatu'];
                print '<br>';
            }
        ?>
    </p>
</body>
</html>
