<?php
include_once '../models/dataBase.php';
$text =  $_GET['text'];
$array = new DataBase();
$array->dbCon();
$result = $array->searchBookList($text);
echo "<table>";
if(!empty($result)){
    foreach ($result as $data) {
        //echo $data['name']."  ". $data['author'];
        echo "<tbody>";
        //echo "<a href='Book_detail.php'>".
        echo "<td>" . "<a href='Book_detail.php?book_id=" . $data["id"]. "'>". $data['id'] . "</a>". "</td>".
            "<td>" . "<a href='Book_detail.php?book_id=" . $data['id'] ."'>" .$data['name'].  "</a>" . "</td>".
            "<td>" . "<a href='Book_detail.php?book_id=" . $data['id'] ."'>" .$data['author'].  "</a>" . "</td>".
            "<td>" . "<a href='Book_detail.php?book_id=" . $data['id'] ."'>" .$data['edition'].  "</a>" . "</td>".

            //echo "<td>" . "<a href='editproduct.php?product_id=" . $data['product_id'] . "' class='btn btn-success'>Edit</a>" . "</td>";
            //echo "<td><a href='deleteProduct.php?product_id=" . $data['product_id'] . "' class='btn btn-danger' name='." . $data['product_id'] . ".'>Delete</td>";
            "</tbody>".
            "</td>";
    }
}
else{
    //echo $text;
}
echo "</table>";
//echo $text;
?>