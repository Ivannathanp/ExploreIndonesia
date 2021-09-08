<?php
$servername = "localhost";
$username = "id17141958_root";
$password = "Ivannp20@gcom";
$dbname = "id17141958_covid";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM province";
$result = $conn->query($sql);
$arr = array ();

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
         //$arr['name']=$row['name'];
         $arr['name']=$row['code'];
         $arr['value']=$row['risk'];
         $arr['data']=$row['confirmed'];
         $arr['code']=$row['name'];
         //$arr = array ($row['code'],$row['risk'],$row['confirmed']);
      $series_array[] = $arr;     
  }

return json_encode ($series_array);
} else {
  echo "0 results";
}
$conn->close();
?>