<?php
session_start();

if(isset($_POST['name'])){
    $_SESSION['name'] = $_POST['name'];
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="center-box">

<h2>Welcome <?php echo $_SESSION['name']; ?></h2>

<a href="leave_form.php" class="btn">Apply Leave</a><br><br><br><br>
<a href="view_leave.php" class="btn">View Status</a>

<br><br><br>
<a href="index.php" class="back-btn">← Back</a>

</div>

</body>
</html>