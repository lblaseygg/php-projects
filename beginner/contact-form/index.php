<?php

//Checking if form fields exist and capturing form inputs and sanitizing them
if (isset($_POST['name'])) {
    $name = trim(htmlspecialchars($_POST['name']));
} else {
    $name = '';
}

if (isset($_POST['email'])) {
    $email = trim(htmlspecialchars($_POST['email']));
} else {
    $email = '';
}

if (isset($_POST['phone'])) {
    $phone = trim(htmlspecialchars($_POST['phone']));
} else {
    $phone = 'phone';
}

if (isset($_POST['message'])) {
    $message = trim(htmlspecialchars($_POST['message']));
} else {
    $message = 'message';
}

// Email validation
if (empty($email)) {
    $errors['email'] = "Email is required";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors["email"] = "Invalid email format";
}

// Name validation
if (empty($name)) {
    $errors["name"] = "Name is required";
} elseif (strlen($name) < 2) {
    $errors["name"] = "Name must be at least 2 characters long";
}

// Confirms the form was submitted
if ($_SERVER['REQUEST_METHOD'] == "POST" && empty($errors)) {
    // success
    echo"Thank you, your message has been submitted!";

}
var_dump($name, $email, $phone, $message);





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form validation</title>
</head>
<body>
    <p>Contact form validation using PHP</p>
    <form method="post">
        <label for="name">Name:</label><br>
        <input placeholder="Enter your name" type="text" name="name" required><br><br>

        <label for="phone">Phone:</label><br>
        <input placeholder="Enter your phone" type="phone" name="phone" required><br><br>

        <label for="email">Email:</label><br>
        <input placeholder="Enter your email" type="email" name="email" required><br><br>

        <label for="message">Message:</label><br>
        <textarea  
            name="message" 
            rows="5" 
            cols="40" 
            placeholder="Write your message here..."
            required
        ></textarea>
        <input type="submit">
    </form>
</body>
</html>