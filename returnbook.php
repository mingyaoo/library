
<?php
include_once('connection.php');
//header("Refresh:2; url= return.php");
print_r($_POST);


$stmt = $conn->prepare("UPDATE Tblbooks SET Borrowed = 1 WHERE BookID = :booksid");
$stmt->bindParam(':booksid', $_POST["books"]);

$stmt->execute();
$conn=null;

?>


