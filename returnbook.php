
<?php
include_once('connection.php');
print_r($_POST);


$stmt = $conn->prepare("UPDATE Tblbooks SET Borrowed = 1 WHERE BookID = :booksid");
$stmt->bindParam(':booksid', $_POST["books"]);
$stmt->execute();

$stmt = $conn->prepare("DELETE from Tblborrow WHERE BookID = :booksid");
$stmt->bindParam(':booksid', $_POST["books"]);
$stmt->execute();

$conn=null;

?>


