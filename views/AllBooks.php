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
<body onload="something2()">
<div align="center">

        <input type="text" size="30" name="textSearch" placeholder="search here" id="textSearch" onkeyup="liveSearch()">

</div>


<script src="liveSearch.js"></script>

<div id="productList">

</div>

<br><br><br>
<div align="center" id="some">

</div>

</body>
</html>
