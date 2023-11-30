<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Users</title>
</head>

<body>
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

    // Select Data
    $sqlSelect = "SELECT id, username, email FROM users";
    $result = $conn->query($sqlSelect);

    if ($result->num_rows > 0) {
        echo "<h2>Registered Users</h2>";
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"] . " - Username: " . $row["username"] . " - Email: " . $row["email"] . "<br>";
        }
    } else {
        echo "<p>No users registered yet.</p>";
    }
    ?>
    <!-- Update form-->
    <form method="post" action="users.php">
    <h3>Update User</h3>
    <label for="updateId">User ID:</label>
    <input type="number" name="updateId" required>
    <label for="newUsername">New Username:</label>
    <input type="text" name="newUsername" required>
    <input type="submit" name="update" value="Update">
    </form>
    <!-- Delete form-->
    <form method="post" action="users.php">
        <h3>Delete User</h3>
        <label for="deleteId">User ID:</label>
        <input type="number" name="deleteId" required>
        <input type="submit" name="delete" value="Delete">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["update"])) {
        // Update Data
        $updateId = $_POST["updateId"];
        $newUsername = $_POST["newUsername"];

        $sql = "UPDATE users SET username='$newUsername' WHERE id=$updateId";

        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    } elseif (isset($_POST["delete"])) {
        // Delete Data
        $deleteId = $_POST["deleteId"];
        $sql = "DELETE FROM users WHERE id=$deleteId";
        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    }
}

    // Close connection
    $conn->close();
    ?>
</body>

</html>
