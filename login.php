<?php
$conn = mysqli_connect("localhost", "root", "", "userdb");

if (!$conn) {
    die("Connection failed");
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row['password'])) {
        echo "Login successful. Welcome " . $row['username'];
    } else {
        echo "Invalid password";
    }
} else {
    echo "User not found";
}

mysqli_close($conn);
?>
