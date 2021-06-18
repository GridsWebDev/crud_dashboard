<?php
    header("content-type application/json");
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "iot_microtro";

    $TT = $_GET["ID"];

    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check Connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $a = $conn->query("SELECT * FROM sensor_module WHERE id = '$TT' ");

    $row = $a->fetch_assoc();

    //echo $row['Hum'];

    //$data = array("results" => array("temp" => $row['temp']), "id" => $row['id'] , "hum" =>$row['Hum']);

    $data22 = array("id" => $row['id'] , "hum" =>$row['Hum'] , "temp" => $row['temp'] , "status" => $row['status']);

    echo json_encode($data22)
?>