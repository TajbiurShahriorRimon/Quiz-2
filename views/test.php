<?php
include_once '../models/dataBase.php';
$text =  $_GET['text'];
$array = new DataBase();
$array->dbCon();
$result = $array->searchBookList($text);
if(!empty($result)){
    foreach ($result as $data) {
        echo $data['name']."  ". $data['author'];
    }
}
else{
    echo $text;
}
//echo $text;
?>