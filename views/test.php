<?php
include_once '../models/dataBase.php';

$text = $_GET['text'];
$array = new DataBase();
$array->dbCon();
$result = $array->searchBookList($text);
echo "<table border='3'>";
    echo "<th>ID</th>
         <th>Name</th>
         <th>Author</th>
         <th>Edition</th>
         <th>Book Image</th>";
if(!empty($result)){
    foreach ($result as $data) {
        echo "<tbody>";
        echo "<td>" . "<a href='Book_detail.php?book_id=" . $data["id"]. "'>". $data['id'] . "</a>". "</td>".
            "<td>" . "<a href='Book_detail.php?book_id=" . $data['id'] ."'>" .$data['name'].  "</a>" . "</td>".
            "<td>" . "<a href='Book_detail.php?book_id=" . $data['id'] ."'>" .$data['author'].  "</a>" . "</td>".
            "<td>" . "<a href='Book_detail.php?book_id=" . $data['id'] ."'>" .$data['edition'].  "</a>" . "</td>".
            "<td>" . "<img src='{$data['bookimage']}' height=100 width=100" .$data['bookimage'].  "</a>" . "</td>".

            "</tbody>".
            "</td>";
    }
}
else{
    echo "NO DATA FOUND";
}
echo "</table>";
?>