<?php
// =========================================================================
// CHALLENGE 1: DEBUGGING MISSION
// This file is currently BROKEN. It has syntax errors and incomplete calculations.
//
// YOUR TASKS:
// 1. Fix the syntax errors stopping the page from rendering.
// 2. Fix the name concatenation problem.
// 3. Complete the mathematical calculation using subtraction (-) to get the actual age.
// =========================================================================

$firstName = "John"
$lastName = "Doe";
$birthYear = 2008;
$currentYear = 2026;

// FIX ME: Concatenation is broken here
$fullName = $firstName + $lastName;

// FIX ME: Complete this arithmetic calculation using the variables above
$computedAge = ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Challenge 1: Fix Me</title>
    <style>
        body { font-family: sans-serif; background: #1b1b2f; display: flex; justify-content: center; align-items: center; min-height: 100vh; margin: 0; color: #fff; }
        .card { background: #162447; padding: 2.5rem; border-radius: 16px; border: 2px solid #e43f5a; width: 320px; text-align: center; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Profile Information</h2>
        <p><strong>Full Name:</strong> <?php echo $fullName; ?></p>
        <p><strong>Calculated Age:</strong> <?php echo $computedAge; ?> Years Old</p>
    </div>
</body>
</html>