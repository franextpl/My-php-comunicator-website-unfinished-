<?php
session_start();

    $chatid = $_POST["chatid"];
    echo 'test';

    require_once "./dbh.inc.php";

    $tableid = 'm'. $chatid;


    try {
       



        $querry2 = "DELETE FROM $tableid";
        $stmt2 = $pdo->prepare($querry2);
        $stmt2->execute();


        echo "<script>location.href='../czat-creator.php';</script>";
        die();
    } catch (PDOException $e) {
        die("Querry falied" . $e->getMessage());
    }

?>