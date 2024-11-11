<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
$value = htmlspecialchars($_POST['value']); 
echo "<h1>Form 2</h1>"; 
echo "<form action='form2.php' method='post'>"; 
echo "<label for='displayValue'>You entered:</label>"; 
echo "<input type='text' name='displayValue' id='displayValue' 
value='$value' readonly>"; 
echo "<br><br>"; 
echo "<input type='submit' value='Go Back'>"; 
echo "</form>"; 
} 
?>

<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial- 
scale=1.0"> 
<title>Form 1</title> 
</head> 
<body> 
<h1>Form 1</h1> 
<form action="form2.php" method="post"> 
<label for="value">Enter a value:</label> 
<input type="text" name="value" id="value" required> 
<br><br> 
<input type="submit" value="Submit"> 
</form> 
</body> 
</html> 