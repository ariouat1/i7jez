<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydatabse";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $full_name = $_POST['full_name'];
    $country = $_POST['country'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (full_name, country, email, password) VALUES ('$full_name', '$country', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "تم تسجيلك بنجاح!";
    } else {
        echo "خطأ: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>