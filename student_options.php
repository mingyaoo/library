<!DOCTYPE html>
<html>
<head>
    <title>User Options</title>
</head>
<body>

    <form action="studentshowoptions.php"  method = "post">
    Admin:<select name="studentname">
    <?php
        include_once('connection.php');
        $stmt = $conn->prepare("SELECT * FROM TblUsers WHERE role=0 ORDER BY Surname ASC");
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            echo('<option value = '. $row["UserID"].'> '.$row["Forename"]." ".$row["Surname"]."</option>");
        }
    ?>	
    </select>

    <input type="submit" value="View options">
    </form>

</body>
</html>
