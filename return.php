<!DOCTYPE html>
<html>
<head>
    
    <title>Page title</title>
    
</head>
<body>
    <form action="returnbook.php" method = "post">
        <select name = "books">
        <?php
        include_once('connection.php');

        $stmt = $conn->prepare("SELECT * FROM TblBooks WHERE Borrowed = 2");
        $stmt->execute();


        while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            echo('<option value='.$row["BookID"].'>'.$row["Bookname"].', '.$row["Bookauthor"].'</option>');
        }
        ?>
        </select>
        <input type="submit" value="return book">

    </form>
</body>
</html>
