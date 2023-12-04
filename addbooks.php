
<?php
array_map("htmlspecialchars", $_POST);
include_once("connection.php");

echo $_POST["Bookname"]."<br>";
echo $_POST["Bookauthor"]."<br>";

$stmt = $conn->prepare("INSERT INTO tblbooks (BookID,Bookname,Bookauthor)VALUES (null,:Bookname,:Bookauthor)");
$stmt->bindParam(':Bookname', $_POST["Bookname"]);
$stmt->bindParam(':Bookauthor', $_POST["Bookauthor"]);
$stmt->execute();
$conn=null;
header('Location: books.php');

?>

