<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>

    <!-- css bootstrap 5 cdn  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>

    <table id="dht11table" class="table table-bordered table-striped">
        <thead>
            <th>#</th>
            <th>module_name</th>
            <th>module_id</th>
            <th>module_local_ip</th>
            <th>module_status</th>
            <th>value</th>
            <th>edit_button</th>
            <th>delete_button</th>
        </thead>

        <tbody>
            <?php 
                // Call a function from a file function.php
                include_once('function.php');
                // give data to variables.
                $fetchdata = new DB_con();
                $sql = $fetchdata->fetchdata();
                // loop show variables.
                while($row = mysqli_fetch_array($sql)) {
            ?>

                <tr>
                    <td><?php echo $row['id']; ?></td> 
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['id']; ?></td>               
                </tr>

            <?php        
                } 
            ?>

            ?>   
        </tbody>
    </table>  

<!-- js bootstrap 5 cdn  -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>


<!-- https://www.youtube.com/watch?v=4bcO0rkm4T8 -->