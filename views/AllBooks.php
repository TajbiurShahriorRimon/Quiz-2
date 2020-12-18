<?php
include '../controllers/booksController.php';
include_once '../models/dataBase.php';
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
<div align="center">
    <input type="text" size="30" name="textSearch"  onkeyup="liveSearch(this)" placeholder="search here">
</div>

<script>
    function something2() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("some").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "test.php?text=", true);
        xhttp.send();
        //alert("fef");
    }
    function something(text) {
        //alert("dejwfd");
        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function () {

            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("some").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "test.php?text="+ text.value, true);
        xhttp.send();
    }
    function liveSearch(text){

        something(text);

    }
        something2();

</script>

<div id="productList">

</div>
<!--
<script>
    function liveSearch(text){
        //alert("hello");
        //document.write("<?php echo 'hello wrold'?>?")

        var str = text.value;
        //if(str || 0 != str.length) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("some").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "test.php?text=" + text.value, true);
            xhttp.send();
        //}
        something()
    }
</script>
-->
<br><br><br>
<div align="center" id="some">

</div>
<!--
<form action=""></form>
<table align="center" border="1">
    <th>ID</th>
    <th>Name</th>
    <th>Author</th>
    <th>Edition</th>
    <th>Book Image</th>
    <?php
        /*include_once '../controllers/booksController.php';

    echo "<div id='somes'>";
    //$sig = 1;
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

             "</tbody>".
                "</td>";
        }
    }
    echo "</div>";*/
    ?>
</table>
-->
</body>
</html>
