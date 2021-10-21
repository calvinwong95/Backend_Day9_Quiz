<form action="employeeTimesheet.php" method="post">
    <label>Key in the value of employee ID to see its attendance: </label>
    <input type="text" name="inputText">
    <input type="submit" name="submit" value="View Attendence List">
</form>;

<?php
    include 'admindb.sql.php';

    $employeeID = $_POST['eid'];

    $sql = "SELECT employee_id, name  FROM employee";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    echo "Employee Id: " . $row["employee_id"]. " - Name: " . $row["name"];
    echo "<br>";
    }
    } else {
    echo "0 results";
    }


    
?>