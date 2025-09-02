<?php
session_start();

// Initialize tasks if not set
if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
}

// Add a task if form is submitted
 if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['task'])) {
    $_SESSION['tasks'][] = $_POST['task'];
 }

 // Get all tasks
 $tasks = $_SESSION['tasks'];

 // To display tasks
 foreach ($_SESSION['tasks'] as $task) {
    echo "<li>" . htmlspecialchars($task) ."</li>";
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List using PHP</title>
</head>
<body>
    <form method="post">
        <input type="text" name="task" placeholder="Enter your task here">
        <input type="submit">
    </form>
</body>
</html>