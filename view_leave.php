<?php
session_start();
include "db.php";

/* Check session */
if(!isset($_SESSION['name']) || $_SESSION['name'] == ""){
    echo "Session expired. Please login again.";
    exit();
}

$name = $_SESSION['name'];
$result = $conn->query("SELECT * FROM leave_requests WHERE LOWER(name)=LOWER('$name')");
$total_days = 0;
?>

<!DOCTYPE html>
<html>
<head>
<title>View Leave</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="center-box">

<h2>Your Leave Details</h2>

<table>
<tr>
<th>Reason</th>
<th>Date</th>
<th>Leave Type</th>
<th>Status</th>
</tr>

<?php while($row = $result->fetch_assoc()){ 

    if(strpos($row['leave_type'], 'On Duty') !== false){
        // Do not count
    }
    elseif(strpos($row['leave_type'], 'Half Day') !== false){
        $total_days += 0.5;
    }
    else{
        $total_days += 1;
    }

?>
<tr>
<td><?php echo $row['reason']; ?></td>
<td><?php echo $row['date']; ?></td>
<td><?php echo $row['leave_type']; ?></td>
<td><?php echo $row['status']; ?></td>
</tr>
<?php } ?>

</table>

<br>

<h3>Total Leave Days Taken: <?php echo $total_days; ?></h3>

<a href="student_dashboard.php" class="back-btn">← Back</a>

</div>

</body>
</html>