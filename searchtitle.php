<html>  
    <body>
        <form action = "librarybooks.php" method = "post">
            <select name = "book">
            <?php
            include_once('connection.php');
            $stmt = $conn->prepare("SELECT DISTINCT Bookname FROM tblbooks ORDER BY Bookname ASC");
            $stmt->execute();


            while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
            {
                echo('<option value='.$row["Bookname"].'>'.$row["Bookname"].'</option>');
            }
            ?>
            </select>
            <input type="submit" value="Search Title">
        </form>
        <form action="mainpage.php"  method = "post">
        <input type="submit" value="back to home">
    </form>
    </body>
</html>