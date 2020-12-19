<?php
    //include '../models/dataBase.php';
    function showBooks($text){
        $array = new DataBase();
        $array->dbCon();
        $result = $array->searchBookList($text);
        return $result;
        //echo 'fsef';
    }
?>
