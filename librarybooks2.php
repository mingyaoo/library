<?php
include_once("connection.php");


echo $_POST["author"]."<br>";

$stmt = $conn->prepare("SELECT * FROM tblbooks WHERE Bookauthor=:Author");
$stmt->bindParam(':Author', $_POST["author"]);
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
    echo($row["Bookname"].' - '.$row["Bookauthor"]."<br>");
}
?>