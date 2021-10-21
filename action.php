<?php
    include 'db.sql.php';

    $employeeID = $_POST['eid'];

    $sql = "INSERT INTO employee_attendence (employee_id) VALUES ('$employeeID') ";

    if ($conn->query($sql)===TRUE) {
        echo "New record has been added <br>";
    } else {
        echo "Error: " .$sql . "<br>" .$conn->error;
    }
    
?>
