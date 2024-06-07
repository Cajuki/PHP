<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
</head>
<body bgcolor="cyan">
<?php
function add($num1, $num2) {
  return $num1 + $num2;
}

function subtract($num1, $num2) {
  return $num1 - $num2;
}

function multiply($num1, $num2) {
  return $num1 * $num2;
}

function divide($num1, $num2) {
  if ($num2 == 0) {
    return "Error: Division by zero is not allowed";
  }
  return $num1 / $num2;
}

function exponentiate($num1, $num2) {
  return pow($num1, $num2);
}

function percentage($num1, $num2) {
  return ($num1 / 100) * $num2;
}

function squareRoot($num) {
  return sqrt($num);
}

function logarithm($num, $base) {
  return log($num, $base);
}

if (isset($_POST['submit'])) {
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  $operation = $_POST['operation'];

  switch ($operation) {
    case 'add':
      $result = add($num1, $num2);
      break;
    case 'subtract':
      $result = subtract($num1, $num2);
      break;
    case 'multiply':
      $result = multiply($num1, $num2);
      break;
    case 'divide':
      $result = divide($num1, $num2);
      break;
    case 'exponentiate':
      $result = exponentiate($num1, $num2);
      break;
    case 'percentage':
      $result = percentage($num1, $num2);
      break;
    case 'squareRoot':
      $result = squareRoot($num1);
      break;
    case 'logarithm':
      $result = logarithm($num1, $num2);
      break;
    default:
      $result = "Error: Invalid operation";
  }
}
?>

<form action="calculator.php" method="post">
  <label for="num1">Number 1:</label>
  <input type="number" id="num1" name="num1" required><br><br>
  <label for="num2">Number 2:</label>
  <input type="number" id="num2" name="num2" required><br><br>
  <label for="operation">Operation:</label>
  <select id="operation" name="operation" required>
    <option value="add">Addition</option>
    <option value="subtract">Subtraction</option>
    <option value="multiply">Multiplication</option>
    <option value="divide">Division</option>
    <option value="exponentiate">Exponentiation</option>
    <option value="percentage">Percentage</option>
    <option value="squareRoot">Square Root</option>
    <option value="logarithm">Logarithm</option>
  </select><br><br>
  <input type="submit" name="submit" value="Calculate">
</form>

<?php if (isset($result)) { ?>
  <p>Result: <?php echo $result; ?></p>
<?php } ?> 
</body>
</html>