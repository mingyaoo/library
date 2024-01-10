<?php
$currentDate = date('Y-m-d');
$stmt = $conn->prepare("SELECT o.* FROM tblborrow AS uo INNER JOIN tblusers AS o ON uo.userID = o.ID WHERE due_date < :currentdate");
$stmt->bindParam(':currentDate', $currentDate);
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
echo($row["Forename"]."is overdue");
}

//uncertain how to output the user name from tblusers from the userid in tblborrow = 3rd normal form coding and usage of foreign key

?>

<html>
    <body>
    <form action="mainpage.php"  method = "post">
        <input type="submit" value="back to home">
    </form>
</body>
</html>