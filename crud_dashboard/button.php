<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "iot_microtro";

    if (isset($_POST['submit'])) {
        $va = $_POST['va'];

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $conn->query("UPDATE sensor_module SET sensor_module = '$va' WHERE id = 4 ");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Button</title>
</head>

<body>

    <form action="" method="POST">
        <input type="hidden" name="va" value="1">
        <input type="submit" name="submit" value="OFF">
    </form>

    <form action="" method="POST">
        <input type="hidden" name="va" value="0">
        <input type="submit" name="submit" value="ON">
    </form>

</body>

</html>

/* http://localhost/button/button.php */