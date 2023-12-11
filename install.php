
<?php
include_once("connection.php");
$stmt = $conn->prepare("DROP TABLE IF EXISTS TblUsers;
CREATE TABLE TblUsers 
(UserID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Surname VARCHAR(20) NOT NULL,
Forename VARCHAR(20) NOT NULL,
Password VARCHAR(200) NOT NULL,
Role TINYINT(1))");
$stmt->execute();
$stmt->closeCursor();


$stmt = $conn->prepare("DROP TABLE IF EXISTS TblBooks;
CREATE TABLE TblBooks 
(BookID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Bookname VARCHAR(20) NOT NULL,
Bookauthor VARCHAR(20) NOT NULL,
Borrowed TINYINT(1) DEFAULT '1')");
$stmt->execute();
$stmt->closeCursor();

$stmt = $conn->prepare("DROP TABLE IF EXISTS TblBorrow;
CREATE TABLE TblBorrow 
(UserID INT(4),
BookID INT(4),
Date_borrowed DATE,
PRIMARY KEY(BookID,UserID))");
$stmt->execute();
$stmt->closeCursor();



?>
