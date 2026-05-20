<?php
// =========================================================================
// CHALLENGE 2: LOGICAL CONSTRUCTION
//
// YOUR TASKS:
// 1. Calculate the $averageScore by adding the scores together and dividing them by 2.
//    (Hint: Watch your mathematical order of operations!).
//
// 2. Research PHP Logical Operators. Create a boolean rule for $hasPassed:
//    The student passes ONLY IF their $averageScore is 50 or higher,
//    AND their $attendancePercent is 85 or higher.
// =========================================================================

$studentName = "Sokha Mean";
$homeworkScore = 45.5;
$examScore = 78.5;
$attendancePercent = 90;

// TODO: Write the mathematical expression here
$averageScore = ;

// TODO: Write the logical evaluation comparison here (Must result in true or false)
$hasPassed = ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Challenge 2: Logic Build</title>
    <style>
        body { font-family: sans-serif; background: #f4f7f6; display: flex; justify-content: center; align-items: center; min-height: 100vh; margin: 0; }
        .report-box { background: white; padding: 2.5rem; border-radius: 14px; width: 350px; box-shadow: 0 15px 30px rgba(0,0,0,0.1); text-align: center;}
        .status-box { margin-top: 20px; padding: 15px; border-radius: 8px; font-weight: bold; font-size: 1.1rem; }
    </style>
</head>
<body>
    <div class="report-box">
        <h2>Academic Report</h2>
        <p style="text-align: left;"><strong>Student:</strong> <?php echo $studentName; ?></p>
        <p style="text-align: left;"><strong>Grade Average:</strong> <?php echo $averageScore; ?>%</p>
        <p style="text-align: left;"><strong>Attendance Record:</strong> <?php echo $attendancePercent; ?>%</p>

        <div class="status-box">
            </div>
    </div>
</body>
</html>