<!DOCTYPE html>
<html>
<head>
    
    <title>Page title</title>
    
</head>
<body>
    <?php
    session_start(); 
    $_SESSION['backURL'] = $_SERVER['REQUEST_URI'];
    if (!isset($_SESSION['name']))
    {   
        header("Location:login.php");
    }
    ?>

    
    <?php
    include_once('connection.php');
    $stmt = $conn->prepare("SELECT tblbooks.Bookname as bn, tblusers.Forename as fn FROM tblborrow 
    INNER JOIN tblbooks on tblbooks.BookID = tblborrow.BookID
    INNER JOIN tblusers on tblusers.UserID = tblborrow.UserID");
    $stmt->execute();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
    {
    echo($row["bn"].": borrowed by :".$row["fn"]."<br>");
    }



    ?>
</body>
</html>

