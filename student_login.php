<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="center-box">
<a href="index.php" class="back-btn">← Back</a>

<h2>Student Login</h2>

<form method="POST" action="student_dashboard.php">
<input type="text" name="name" placeholder="Enter Name" required>
<input type="password" name="password" placeholder="Password" required>

<input type="submit" value="Login">
</form>

</div>
</body>
</html>