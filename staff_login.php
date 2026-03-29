<?php session_start(); 

$dept = isset($_GET['dept']) ? $_GET['dept'] : "Unknown";

/* Select image based on department */
if($dept == "IT"){
    $image = "it-1.jpg";
}
elseif($dept == "CSE"){
    $image = "cse.jpg";
}
else{
    $image = "aids.jpg";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Staff Login</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="center-box">

<h2><?php echo $dept; ?> Staff Login</h2>

<!-- Department Image -->
<img src="<?php echo $image; ?>" width="120" style="margin-bottom:15px;">

<form method="POST" action="staff.php">

<input type="hidden" name="dept" value="<?php echo $dept; ?>">

<input type="password" name="pass" placeholder="Enter Password" required>

<input type="submit" value="Login">
<a href="index.php" class="back-btn">← Back</a>

</form>


</div>

</body>
</html>