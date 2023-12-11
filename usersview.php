    
<?php

    include_once("connection.php");
    $stmt = $conn->prepare("SELECT * FROM TblUsers WHERE Role=0" );
    $stmt->execute();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
    {
    echo($row["UserID"].'-'.$row["Forename"].' '.$row["Surname"]."<br>");
    }
?>


<html>
   <body>
   <form action="mainpage.php"  method = "post">
        <input type="submit" value="back to home">
    </form>
</body>
</html>