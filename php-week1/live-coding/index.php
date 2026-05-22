<h1>Live Coding</h1>
<?php
$studentName = "Alice Smith";
$currentCourse = "Web Mobile Application Development (WMAD)";
$welcomeMessage = "Welcome back, " . $studentName . "! ";
$welcomeMessage .= "You are currently enrolled in " . $currentCourse . ".";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <p><?php echo $welcomeMessage; ?></p>
</body>
</html>

