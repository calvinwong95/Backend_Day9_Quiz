<?php
    include "admindb.sql.php";
    $inputID = $_POST['inputText'];
    $sqlTwo = "SELECT name FROM employee WHERE employee_id = '$inputID'";
    $sql = "SELECT date FROM employee_attendence WHERE employee_id = '$inputID'";

    $resultTwo = $conn->query($sqlTwo);
    if ($resultTwo->num_rows > 0) {
        // output data of each row
        while($row = $resultTwo->fetch_assoc()) {
            echo  $row["name"];
            echo "<br>";
            }
        }else {
            echo "0 results";
        };
        

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "Checked In Time: " . $row["date"];
        echo "<br>";
        }
        } else {
        echo "0 results";
        }

?>