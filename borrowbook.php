
<?php
session_start();
include_once('connection.php');
//header("Refresh:2; url= borrow.php");
$myDate = date("Y-m-d");#trim($_POST['exam_date']);
print_r($_SESSION);

$stmt = $conn->prepare("INSERT INTO tblborrow (UserID,BookID,Date_borrowed)VALUES (:userid,:bookid,:dates)");
$stmt->bindParam(':userid', $_SESSION["loggedinid"]);
$stmt->bindParam(':bookid', $_POST["books"]);
$stmt->bindParam(':dates', $myDate);
$stmt->execute();
$stmt = $conn->prepare("UPDATE Tblbooks SET Borrowed = 2 WHERE BookID = :booksid");
$stmt->bindParam(':booksid', $_POST["books"]);
$stmt->execute();



$conn=null;


?>


