<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Leave Management System</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="center-box">

<h1>Leave Management System</h1>

<h3>Select Your Role</h3>

<!-- Student -->
<a href="student_login.php" class="btn">Student</a>

<!-- Staff with department -->
<h4>Staff Department</h4>

<a href="staff_login.php?dept=CSE" class="btn">CSE</a>
<a href="staff_login.php?dept=IT" class="btn">IT</a>
<a href="staff_login.php?dept=AIDS" class="btn">AIDS</a>
<br><br>
<img src="clg.jpg" alt=clg>
</div>

</body>
</html>