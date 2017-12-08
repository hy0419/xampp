<?php
session_start();

require_once __DIR__."/key/XamppAccess.php";
    $banngou=$_POST['banngou'];
    $name=$_POST['name'];
    $seibetu=$_POST['seibetu'];
    $bukatu=$_POST['bukatu'];
    $sql = "UPDATE My_class SET name = :name,seibetu = :seibetu,bukatu =:bukatu WHERE bangou = :bangou";

    $stmt = dbAccess()->prepare($sql);

    $stmt -> bindParam(':banngou',$banngou,PDO::PARAM_STR);
    $stmt -> bindParam(':name',$name,PDO::PARAM_STR);
    $stmt -> bindParam(':seibetu',$seibetu,PDO::PARAM_STR);
    $stmt -> bindParam(':bukatu',$bukatu,PDO::PARAM_STR);

    $stmt->execute();

   header( "Location:start.php" ) ;
    exit ;