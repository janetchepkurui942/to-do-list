<!DOCTYPE html>
<html>

<head>
    <title>Insert Task page</title>
</head>

<body>
    <center>
        <?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "on_the_fly");

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking all 5 values from the form data(input)
        $task_id = $_REQUEST['task_id'];
        $task_name = $_REQUEST['task_name'];
        $deadline = $_REQUEST['deadline'];
      

        // We are going to insert the data into our sampleDB table
        $sql = "INSERT INTO tasks VALUES ('$task_id','$task_name',
            '$deadline')";

        // Check if the query is successful
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please proceed"
                . " to view the updated data</h3>";

            echo nl2br("\n $task_name\n $deadline\n ");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>