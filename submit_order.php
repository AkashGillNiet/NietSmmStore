<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $service = $_POST['service'];
    $link = $_POST['link'];

    // Here you can handle the form submission, such as saving data to a database or sending email
    // For now, we'll just echo the data
    echo "Order Submitted!<br>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Service: " . $service . "<br>";
    echo "Social Media Link: " . $link . "<br>";
}
?>
