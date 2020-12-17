<?php
?>

<html>
<head>
    <style>
        table, th, td {
            border-left: none;
            border-right: none;
        }
    </style>
</head>
<body>
<form action=""></form>
<table align="center" border="1">
    <th>ID</th>
    <th>Name</th>
    <th>Author</th>
    <th>Edition</th>
    <th>Book Image</th>
    <?php
    include '../controllers/booksController.php';

    if(!empty($result)) {
        //echo 'not empty';
        foreach ($result as $data) {
            //echo "<a href='Book_detail.php'>" . "<tr>".$data['id'] ."</tr>". "</a>";

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
    ?>
</table>
</body>
</html>
