<?php 
// api.php 
// Set headers to allow the API to receive JSON data and handle CORS (for testing) 
header("Access-Control-Allow-Origin: *"); 
header("Content-Type: application/json; charset=UTF-8"); 
header("Access-Control-Allow-Methods: POST"); 
header("Access-Control-Max-Age: 3600"); 
header("Access-Control-Allow-Headers: 
Authorization, X-Requested-With"); 
// Database connection details 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "api_test_db"; 
// Create connection 
Content-Type, Access-Control-Allow-Headers, 
$conn = new mysqli($servername, $username, $password, $dbname); 
// Check connection 
if ($conn->connect_error) { 
die("Connection failed: " . $conn->connect_error); 
} 
// Get the posted data from the request body 
$data = json_decode(file_get_contents("php://input"));
// Validate data 
if(isset($data->username) && isset($data->email)) { 
    // Sanitize input 
    $username = htmlspecialchars(strip_tags($data->username)); 
    $email = htmlspecialchars(strip_tags($data->email)); 
    // Prepare SQL query 
    $sql = "INSERT INTO users (username, email) VALUES ('$username', '$email')"; 
    if ($conn->query($sql) === TRUE) { 
    // Send a success response 
    http_response_code(201); // Created 
    echo json_encode(array("message" => "User created successfully.")); 
    } else { 
    // Send an error response 
    http_response_code(503); // Service unavailable 
    echo json_encode(array("message" => "Unable to create user.")); 
    } 
    } else { 
    // Send an error response for incomplete data 
    http_response_code(400); // Bad request 
    echo json_encode(array("message" => "Incomplete data. Username and email are 
    required.")); 
    } 
    // Close the database connection 
    $conn->close(); 
    ?>