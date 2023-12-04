<?php
include_once("connection.php");

echo $_POST["book"]."<br>";

$stmt = $conn->prepare("SELECT * FROM tblbooks WHERE Bookname=:Book");
$stmt->bindParam(':Book', $_POST["book"]);
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
    echo($row["Bookname"].' - '.$row["Bookauthor"]."<br>");
}
?>
