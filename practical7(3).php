<?php 
// Replace with your own username and password for validation
 
$stored_username = 'admin'; 
$stored_password = 'password123'; 
if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
$username = htmlspecialchars($_POST['username']); 
$password = htmlspecialchars($_POST['password']); 
if ($username === $stored_username && $password 
=== $stored_password) { 
echo "Login successful! Welcome, $username."; 
} else { 
echo "Invalid username or password."; 
} 
} 
?>
 HTML: 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, 
initial-scale=1.0"> 
<title>Login</title> 
</head> 
<body> 
<h1>Login</h1> 
<form action="login.php" method="post"> 
<label for="username">Username:</label> 
<input type="text" name="username" id="username" 
required> 
<br><br> 
<label for="password">Password:</label> 
<input 
type="password" 
name="password" 
id="password" required> 
<br><br> 
<input type="submit" value="Login"> 
</form> 
</body> 
</html> 