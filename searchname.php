<html>
<title>search by title</title>
    
</head>
<body>
    <form action = "librarybooks2.php" method = "post">
        <select name = "author">
        <?php
        include_once('connection.php');
        $stmt = $conn->prepare("SELECT DISTINCT Bookauthor FROM tblbooks ORDER BY Bookauthor ASC");
        $stmt->execute();


        while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            echo('<option value='.$row["Bookauthor"].'>'.$row["Bookauthor"].'</option>');
        }
        ?>
        </select>
        <input type="submit" value="Search author">
    </form>
    <form action="mainpage.php"  method = "post">
        <input type="submit" value="back to home">
    </form>
</body>
</html>
