<?php
session_start(); // ✅ MUST at top
include "db.php";

$name = $_POST['name'];
$_SESSION['name'] = $name; // ✅ ADD THIS LINE HERE

$branch = $_POST['branch'];
$class = $_POST['class'];
$reason = $_POST['reason'];
$date = $_POST['date'];
$leave_type = $_POST['leave_type'];
$event = $_POST['event'];

$additional = isset($_POST['additional']) ? implode(", ", $_POST['additional']) : "";

$sql = "INSERT INTO leave_requests 
(name, branch, class, reason, date, leave_type, event, status) 
VALUES 
('$name','$branch','$class','$reason','$date','$leave_type $additional','$event','Pending')";

if($conn->query($sql) === TRUE){
  echo "<script>alert('Submitted');window.location='index.php';</script>";
} else {
  echo "Error: " . $conn->error;
}
?>