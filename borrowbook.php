
<?php
include_once('connection.php');
//header("Refresh:2; url= borrow.php");
print_r($_POST);

$stmt = $conn->prepare("INSERT INTO tblborrow (UserID,BookID,Date_borrowed)VALUES (:userid,:bookid,:dates)");
$stmt->bindParam(':userid', $_POST["user"]);
$stmt->bindParam(':bookid', $_POST["books"]);
$stmt->bindParam(':dates', $_POST["date"]);
$stmt->execute();
$stmt = $conn->prepare("UPDATE Tblbooks SET Borrowed = 2 WHERE BookID = :booksid");
$stmt->bindParam(':booksid', $_POST["books"]);
$stmt->execute();



$conn=null;


?>


