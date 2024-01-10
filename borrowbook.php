
<?php
session_start();
include_once('connection.php');
print_r($_SESSION);


$today = new DateTime();
$nextMonth = $today->modify('+1 month')->format('Y-m-d');
$stmt = $conn->prepare("INSERT INTO tblborrow (UserID,BookID,due_date)VALUES (:userid,:bookid, :nextMonth)");
$stmt->bindParam(':userid', $_SESSION["loggedinid"]);
$stmt->bindParam(':bookid', $_POST["books"]);
$stmt->bindParam(':nextMonth', $nextMonth);
$stmt->execute();
$stmt = $conn->prepare("UPDATE Tblbooks SET Borrowed = 2 WHERE BookID = :booksid");
$stmt->bindParam(':booksid', $_POST["books"]);
$stmt->execute();






?>


