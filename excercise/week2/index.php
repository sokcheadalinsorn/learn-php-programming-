<h1>Live Coding</h1>
<?php
  // Fun PHP Operator Exercises
  // 1. Arithmetic Operators (+ - * / % **)
  // Exercise 1 — Pizza Party

  $pizzaPrice = 12;
  $numberOfFriends = 4;

  // 1. Calculate total cost if each friend buys 2 pizzas.
  $totalCost = $pizzaPrice *2* $numberOfFriends; 

  // 2. Calculate how much each friend pays equally.
  $eachFirend = $totalCost/ $numberOfFriends;

  // 3. Show the remainder if $50 is divided among friends.
  $remainder = 50 % $numberOfFriends;

  //output
  echo "Calculate total cost if each friend buys 2 pizzas:" .$totalCost. "<br>";
  echo "Calculate how much each friend pays equally:" .$eachFirend. "<br>";
  echo "Show the remainder if $50 is divided among friends:"  .$remainder. "<br><br><br><br>";

  // Exercise 2 — Gamer XP System

  $xp = 150;
  $bonus = 50;

  // 1. Add bonus XP
  $addBonus = $xp + $bonus;
  
  // 2. Double the XP using multiplication
  $doubleXp = $addBonus*2;

  // 3. Calculate XP power using exponent operator (**).
  $calulateXp = $xp**2;

  //output
  echo "Add bonus XP:" .$xp. "<br>";
  echo "Double the XP using multiplication:" .$addBonus. "<br>";
  echo "Calculate XP power using exponent operator (**):" .$calulateXp. "<br><br><br><br>";

  // 2. Assignment Operators (= += -= *= /= .=)
  // Exercise 3 — Bank Account

  $balance = 100;

  // 1. Add a salary of 200
  $addSalary = $balance += 200;

  // 2. Subtract food expense of 50.
  $subtractFood = $addSalary;
  $subtractFood -= 50;

  // 3. Multiply savings by 2.
  $multiply = $subtractFood;
  $multiply *= 2;

  // 4. Divide final balance by 5.
  $divideFinal = $multiply;
  $divideFinal /= 5;

  //output
  echo "Add a salary of 200: $addSalary". "<br>";
  echo "Subtract food expense of 50: $subtractFood". "<br>";
  echo "Multiply savings by 2: $multiply". "<br>";
  echo "Divide final balance by 5: $divideFinal". "<br>";

  //Exercise 4 — Build a Username

  $username = "hong";

  //1. Add "_".
    $underscore = $username;
    $underscore .= "_"; 

  // 2. Add "developer".
    $nameDeveloper  = $underscore;
    $nameDeveloper .= "developer";
  //output
  echo "$nameDeveloper";

  //3. Comparison Operators (== === != > < >= <=)

  //Exercise 5 — Age Checker
  $age = 18;

  //1. Check if age is equal to 18.
    var_dump($age == 18);

  //2. Check if age is greater than 16.
   var_dump($age >= 16);

  //3. Check if age is not equal to 21.
  var_dump($age != 21);
?>