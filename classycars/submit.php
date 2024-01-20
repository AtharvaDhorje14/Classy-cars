<?php
    // connect to the database
    $conn = mysqli_connect("localhost", "root", "", "mydatabase");

    // check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // retrieve data from the text box
    $name = $_POST['name'];
    $feedback = $_POST['feedback'];
	
    // sql query to insert data into the database
    $sql = "INSERT INTO users (name, feedback) VALUES ('$name', '$feedback')";

    // execute the query
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // close the connection
    mysqli_close($conn);
?>