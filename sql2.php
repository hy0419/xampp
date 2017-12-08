<?php
    session_start();
    require_once __DIR__."/key/XamppAccess.php";
    $sql = 'DELETE FROM My_class WHERE  banngou = :banngou';
    $stmt = dbAccess()->prepare($sql);


    $stmt -> bindParam(':banngou',$_SESSION['sql2'][0],PDO::PARAM_STR);


    $stmt -> execute();

    header( "Location:start.php" ) ;
    exit ;