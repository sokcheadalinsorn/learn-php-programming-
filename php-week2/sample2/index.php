<?php
// SAMPLE CODE: Ready to run.
// Use this to show students mixed data types and basic arithmetic.

$productName = "MacBook Pro M3"; // String (wrapped in quotes)
$basePrice = 2000;               // Integer (whole numbers)
$taxRate = 0.10;                 // Float / Double (decimal precision)
$hasDiscount = true;             // Boolean (true or false status flags)

// Arithmetic & Assignment Operators
$taxAmount = $basePrice * $taxRate;
$totalPrice = $basePrice + $taxAmount;

// If statement checking our boolean data type
if ($hasDiscount) {
  $totalPrice = $totalPrice - 150; // Subtracting a flat discount
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Sample 2: Data Types</title>
  <style>
    body {
      font-family: sans-serif;
      background: #e0eafc;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
    }

    .receipt {
      background: white;
      padding: 2rem;
      border-radius: 8px;
      width: 300px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
    }

    .row {
      display: flex;
      justify-content: space-between;
      margin: 10px 0;
      font-size: 0.95rem;
    }
  </style>
</head>

<body>
  <div class="receipt">
    <h3>Order Checkout</h3>
    <div class="row"><span>Item:</span> <strong><?php echo $productName; ?></strong></div>
    <div class="row"><span>Base Price:</span> <span>$<?php echo $basePrice; ?></span></div>
    <div class="row"><span>Tax (10%):</span> <span>$<?php echo $taxAmount; ?></span></div>
    <div class="row" style="font-weight: bold; border-top: 1px solid #ccc; padding-top: 10px;">
      <span>Total:</span> <span>$<?php echo $totalPrice; ?></span>
    </div>
  </div>
</body>

</html>