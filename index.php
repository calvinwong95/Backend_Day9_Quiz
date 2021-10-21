<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day9 Quiz</title>
</head>
<body>
<?php
    include "db.sql.php";
?>
    <form action="action.php" method="post">
    <label> Key in your Employee ID: </label>
    <input type="text" name="eid">
    <input type="submit" name="submit" Value="Mark Attendence">
    </form>
</body>
</html>