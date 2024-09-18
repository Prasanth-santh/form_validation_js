<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];

    // Output the form values
    echo "<h2>Form Submitted Successfully!</h2>";
    echo "<p><strong>Name:</strong> $uname</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Password:</strong> $pass</p>";
    echo "<p><strong>Mobile:</strong> $mobile</p>";
    echo "<p><strong>Address:</strong> $address</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
}
?>