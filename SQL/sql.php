<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>Student Information System</h1>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "studentinfo";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $email = $_POST["email"];

        // Insert data 
        $sql = "INSERT INTO users (username, email) VALUES ('$username', '$email')";

        if ($conn->query($sql) === TRUE) {
            // To users.php
        header("Location: users.php");
        exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    //Form
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>
        <label for="email">Email:</label>
        <input type="email" name="email" required><br>
        <input type="submit" value="Submit">
    </form>
    <?php
    // Close connection
    $conn->close();
    ?>
</body>

</html>
