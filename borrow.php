<!DOCTYPE html>
<html>
<head>
    
    <title>Page title</title>
    
</head>
<body>
    <form action="borrowbook.php" method = "post">
        Date borrowed:<input type="text" name="date">
        <select name = "user">

        <?php
        include_once('connection.php');
        $stmt = $conn->prepare("SELECT * FROM TblUsers WHERE Role = 0 ORDER BY Surname ASC");
        $stmt->execute();


        while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            echo('<option value='.$row["UserID"].'>'.$row["Surname"].', '.$row["Forename"].'</option>');
        }
        ?>
        </select>

        
        <select name = "books">
        <?php
       
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
</body>
</html>
