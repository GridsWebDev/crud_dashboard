<?php
    // กำหนด hostname, username, password
    define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'iot_microtro');

    class DB_con {
        // When invoked class DB_con , the function __construct() is used now.
        function __construct() {
            // connect db.
            // mysqli_connect() use 4 argument.
            $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
            // create variable this keyword. collect data from $conn.
            $this->dbcon = $conn;

            // check connection.
            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL : " . mysqli_connect_error();
            }
        }

        // function insert data
        public function insert($module_name, $module_id, $module_local_ip, $module_status, $value) {
            // create variable result. collect query data.
            $result = mysqli_query($this->dbcon, "INSERT INTO sensor_module(module_name, module_id, module_local_ip, module_status, value) 
            VALUES('$module_name', '$module_id', '$module_local_ip', '$module_status', '$value')");
            return $result;
        }

        // function fetch data 
        public function fetchdata() {
            $result = mysqli_query($this->dbcon, "SELECT * FROM sensor_module");
            return $result;

        }

    }

?>