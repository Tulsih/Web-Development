
<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
// Directory where the file will be uploaded 
$target_dir = "LabProgram/Pr7/Upload"; 
$target_file = $target_dir . basename($_FILES["file"]["name"]); 
// Check if the upload directory exists; if not, create it 
if (!is_dir($target_dir)) { 
mkdir($target_dir, 0777, true); 
} 
// Check if file is a valid upload 
if 
(move_uploaded_file($_FILES["file"]["tmp_name"], 
$target_file)) { 
echo 
"The 
file 
" 
. 
htmlspecialchars(basename($_FILES["file"]["name"])) . " has been 
uploaded."; 
} else { 
echo "Sorry, there was an error uploading your file."; 
} 
}?>

<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial- 
scale=1.0"> 
<title>File Upload</title> 
</head> 
<body> 
<h1>Upload a File</h1> 
<form 
action="Upload.php" 
method="post" 
enctype="multipart/form-data"> 
<label for="file">Choose a file:</label> 
<input type="file" name="file" id="file" required> 
<br><br> 
<input type="submit" value="Upload"> 
</form> 
</body> 
</html>