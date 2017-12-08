<?php
    session_start();
    require_once __DIR__."/key/XamppAccess.php";
    $sql = 'INSERT INTO My_class(banngou,name,seibetu,bukatu) VALUES(:banngou,:name,:seibetu,:bukatu)';
    $stmt = dbAccess()->prepare($sql);


    $stmt->bindParam(':banngou',$_SESSION['sql'][0],PDO::PARAM_STR);
    $stmt->bindParam(':name',$_SESSION['sql'][1],PDO::PARAM_STR);
    $stmt->bindParam(':seibetu',$_SESSION['sql'][2],PDO::PARAM_STR);
    $stmt->bindParam(':bukatu',$_SESSION['sql'][3],PDO::PARAM_STR);



    $stmt->execute();

    header( "Location:start.php" ) ;
    exit ;
