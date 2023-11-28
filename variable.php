<?php
session_start(); // Start the session

// Handling a GET request
if (isset($_GET['get_param'])) {
    echo "GET parameter received: " . htmlspecialchars($_GET['get_param']) . "<br>";
}

// Handling a POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['post_param'])) {
        echo "POST parameter received: " . htmlspecialchars($_POST['post_param']) . "<br>";
    }

    // Handling file uploads
    if (isset($_FILES['file_upload'])) {
        $file_name = $_FILES['file_upload']['name'];
        $file_tmp = $_FILES['file_upload']['tmp_name'];
        move_uploaded_file($file_tmp, "uploads/" . $file_name);
        echo "File uploaded: " . htmlspecialchars($file_name) . "<br>";
    }
}

// Setting and displaying a cookie
$cookie_name = "TestCookie";
$cookie_value = "PHP";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
if(isset($_COOKIE[$cookie_name])) {
    echo "Cookie set: " . htmlspecialchars($_COOKIE[$cookie_name]) . "<br>";
}

// Using session
$_SESSION["session_var"] = "Hello, World!";
echo "Session variable set: " . $_SESSION["session_var"] . "<br>";

// Environment variables (example)
echo "Your server software is: " . $_SERVER["SERVER_SOFTWARE"] . "<br>";
echo "Your IP address is: " . $_SERVER["REMOTE_ADDR"] . "<br>";

// $_REQUEST can contain both GET and POST data
if (isset($_REQUEST['request_param'])) {
    echo "REQUEST parameter received: " . htmlspecialchars($_REQUEST['request_param']) . "<br>";
}
?>

<!-- HTML Form for POST and GET requests -->
<form method="post" enctype="multipart/form-data">
    POST Parameter: <input type="text" name="post_param"><br>
    <input type="submit" value="Submit POST">
</form>

<form method="get">
    GET Parameter: <input type="text" name="get_param"><br>
    <input type="submit" value="Submit GET">
</form>

<form method="post" enctype="multipart/form-data">
    File: <input type="file" name="file_upload"><br>
    <input type="submit" value="Upload File">
</form>

<form method="post">
    REQUEST Parameter: <input type="text" name="request_param"><br>
    <input type="submit" value="Submit REQUEST">
</form>
