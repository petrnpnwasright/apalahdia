<?php 
if($_SERVER["REQUEST_METHOD"] == "POST") {
     
    // retrieve form data
    if(isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Database Connection
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "auth";

        $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

        if($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Execute the query with user input directly (allowing SQL injection)
        $query = "SELECT * FROM login WHERE username='$username' AND password='$password'";

        $result = $conn->query($query);

        if($result->num_rows == 1) {
            // login success
            header("Location: success.html");
            exit();
        }
        else {
            // login failed
            header("Location: error.html");
            exit();
        }

        $conn->close();
    }
    else {
        echo "Username or password not provided.";
    }
}
?>

