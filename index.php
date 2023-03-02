<?php

include 'db_connection.php';

$conn = OpenCon();

echo "Connected Successfully" . "<br>";

 $sql = "SELECT * FROM users";
 $result = $conn->query($sql);

echo "number of users: " . $result->num_rows . "<br>";

if ($result->num_rows > 0) {
  //while($row = $result->fetch_assoc()) {
    //echo "id: " . $row["ID"]. " - Name: " . $row["user_login"] . "<br>";
  //}
  $fieldinfo = $result -> fetch_fields();

  foreach ($fieldinfo as $val) {
    echo("Name: ". $val -> name . ", ");
    echo("Table: ". $val -> table . ", ");
    echo("Max. Len: ". $val -> max_length . "<br>");
  }
 } else {
  echo "0 results" . "<br>";
 }

$result -> free_result();

echo "close connection" . "<br>";

CloseCon($conn);

?>