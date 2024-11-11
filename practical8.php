<!-- store.php --> 
<?php 
// Database connection 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "users_db"; // Create this database in MySQL 
$conn = new mysqli($servername, $username, $password, $dbname); 
// Check connection 
if ($conn->connect_error) { 
die("Connection failed: " . $conn->connect_error); 
} 
// Get form data 
$name = $_POST['name']; 
$address = $_POST['address']; 
$email = $_POST['email']; 
$phone = $_POST['phone']; 
// Insert user data into the table 
$sql = "INSERT INTO users (name, address, email, phone) VALUES ('$name', '$address', 
'$email', '$phone')"; 
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully. <a href='display.php'>View Users</a>"; 
} else { 
echo "Error: " . $sql . "<br>" . $conn->error; 
}
$conn->close(); 
?>
<!-- display.php --> 
<?php 
// Database connection 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "users_db"; 
$conn = new mysqli($servername, $username, $password, $dbname); 
// Check connection 
if ($conn->connect_error) { 
die("Connection failed: " . $conn->connect_error); 
} 
// Fetch all users from the database 
$sql = "SELECT id, name, address, email, phone FROM users"; 
$result = $conn->query($sql); 
if ($result->num_rows > 0) { 
echo "<h2>Registered Users</h2>"; 
echo 
"<table 
border='1'><tr><th>ID</th><th>Name</th><th>Address</th><th>Email</th><th>Phone</t 
h></tr>";
// Output data of each row 
while($row = $result->fetch_assoc()) { 
    echo  "<tr><td>" .  $row["id"].  "</td><td>"  .  $row["name"].  "</td><td>"  . 
    $row["address"]. "</td><td>" . $row["email"]. "</td><td>" . $row["phone"]. "</td></tr>"; 
    } 
    echo "</table>"; 
    } else { 
    echo "0 results"; 
    }
    $conn->close(); 
?>

<!-- registration.php --> 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>User Registration</title> 
</head> 
<body> 
<h2>User Registration</h2> 
<form action="store.php" method="POST"> 
<label for="name">Name:</label> 
<input type="text" id="name" name="name" required><br><br> 
<label for="address">Address:</label> 
<input type="text" id="address" name="address" required><br><br> 
<label for="email">Email:</label> 
<input type="email" id="email" name="email" required><br><br> 
<label for="phone">Phone:</label> 
<input type="text" id="phone" name="phone" required><br><br>
<input type="submit" value="Register"> 
</form> 
</body> 
</html>