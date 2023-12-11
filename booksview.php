    
<?php
   include_once('connection.php');
   $stmt = $conn->prepare("SELECT * FROM tblbooks");
   $stmt->execute();
   while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
   {
   echo($row["Bookname"].' - '.$row["Bookauthor"]."<br>");
   }

?>

<html>
   <body>
   <form action="mainpage.php"  method = "post">
        <input type="submit" value="back to home">
    </form>
</body>
</html>