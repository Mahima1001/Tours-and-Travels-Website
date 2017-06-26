<?php
//database settings
$connect = mysqli_connect("localhost", "root", "", "toursntravellism");

$result = mysqli_query($connect, "select cityname from city");

$data = array();

while ($row = mysqli_fetch_array($result)) {
  $data[] = $row;
}
    print json_encode($data);
?>