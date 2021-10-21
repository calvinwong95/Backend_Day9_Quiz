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
    include "admindb.sql.php";
?>
    <form action="adminAction.php" method="post">
    <label> Enter your username: </label>
    <input type="text" name="eid">
    <input type="submit" name="submit" value="Log In">
    </form>
</body>
</html>