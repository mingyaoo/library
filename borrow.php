<!DOCTYPE html>
<html>
<head>
    
    <title>Page title</title>
    
</head>
<body>
    <form action="borrowbook.php" method = "post">
        <select name = "books">
        <?php
        include_once('connection.php');
       
        $stmt = $conn->prepare("SELECT * FROM TblBooks WHERE Borrowed = 1 ORDER BY Bookname ASC");
        $stmt->execute();


        while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            echo('<option value='.$row["BookID"].'>'.$row["Bookname"].', '.$row["Bookauthor"].'</option>');
        }
        ?>
        </select>
        <input type="submit" value="borrow book">

    </form>
    <form action="mainpage.php"  method = "post">
        <input type="submit" value="back to home">
    </form>

</body>
</html>
