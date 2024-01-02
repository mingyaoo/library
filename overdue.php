<?php
$$currentDate = date('Y-m-d');
$stmt = $conn->prepare("SELECT * FROM tblborrow WHERE due_date < :currentDate");
$stmt->bindParam(':currentDate', $currentDate);
$stmt->execute();
$overdueBooks = $stmt->fetchAll(PDO::FETCH_ASSOC);

//make this output only the ones that are overdue
$stmt = $conn->prepare("SELECT tblbooks.Bookname as bn, tblusers.Forename as fn FROM tblborrow 
INNER JOIN tblbooks on tblbooks.BookID = tblborrow.BookID
INNER JOIN tblusers on tblusers.UserID = tblborrow.UserID");
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
echo($row["bn"].": borrowed by :".$row["fn"]."<br>");
}

?>