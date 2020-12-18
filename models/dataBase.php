<?php
class DataBase
{
    private $serverName = "localhost: 3345";
    private $user = "root";
    private $dbpassword = "";
    private $dbName = "quiz2";

    private $con;

    function dbCon()
    {
        $this->con = mysqli_connect($this->serverName, $this->user, $this->dbpassword, $this->dbName);

        if (!$this->con) {
            die("not connected");
        } else {
            //echo "Connected<br> Now Showing data <br><br/>";
        }
    }

    function allBooks(){
        $sqlQuery = "select * from books";
        $result = mysqli_query($this->con, $sqlQuery);
        $row = mysqli_num_rows($result);

        $data = []; //empty array

        if($row > 0){
            while ($rowArray = mysqli_fetch_assoc($result)){
                $data[] = $rowArray;
            }
            return $data;
        }
        else {
            return $data;
        }
    }

    function bookDetails($book_id){
        $sqlQuery = "select description from bookdescription where id='$book_id'";
        $result = mysqli_query($this->con, $sqlQuery);
        $row = mysqli_num_rows($result);

        //$data = []; //empty array

        if($row > 0){
            while ($rowArray = mysqli_fetch_assoc($result)){
                $data = $rowArray;
            }
            return $data;
        }
        /*else {
            return $data;
        }*/
    }

    function searchBookList($text){
        $sqlQuery = "select id, name, author, edition, bookimage from books where id LIKE '%$text%'
                       or name LIKE '%$text%' or edition like '%$text%' or author like '%$text%' ";
        $result = mysqli_query($this->con, $sqlQuery);
        $row = mysqli_num_rows($result);

        $data = []; //empty array

        if($row > 0){
            while ($rowArray = mysqli_fetch_assoc($result)){
                $data[] = $rowArray;
            }
            return $data;
        }
        else {
            return $data;
        }
    }
}
?>