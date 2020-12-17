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
}
?>

</body>
</html>
