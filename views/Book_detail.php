<?php

?>

<html>
<head>

</head>
<body>
<?php
    include '../models/dataBase.php';
$array = new DataBase();
$array->dbCon();
$result = $array->bookDetails($_GET['book_id']);
if(!empty($result)){
    echo $result['description'];
    echo "<br>"."<br>";
    echo "book ID: ".$result['id']."<br>";
    echo "book name: ".$result['name']."<br>";
    echo "book author: ".$result['author']."<br>";
    echo "book edition: ".$result['edition']."<br>";
}
?>

</body>
</html>
