<?php
    include '../models/dataBase.php';
    $array = new DataBase();
    $array->dbCon();
    $result = $array->allBooks();
    //echo 'fsef';
?>
