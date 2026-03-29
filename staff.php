<?php
session_start();
include "db.php";

$dept = $_POST['dept'] ?? $_SESSION['dept'];
$_SESSION['dept'] = $dept;

// Approve / Reject action
if(isset($_GET['action']) && isset($_GET['id'])){
    $id = $_GET['id'];
    $action = $_GET['action']; // approve or reject
    $status = ($action == 'approve') ? 'Approved' : 'Rejected';
    $conn->query("UPDATE leave_requests SET status='$status' WHERE id='$id'");
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="center-box">

<h2><?php echo $dept; ?> Department Leaves</h2>

<table>
<tr>
<th>Name</th>
<th>Date</th>
<th>Reason</th>
<th>Leave Type</th>
<th>Status</th>
<th>Action</th>
</tr>

<?php
$result = $conn->query("SELECT * FROM leave_requests WHERE branch='$dept'");
while($row = $result->fetch_assoc()){
?>
<tr>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['date']; ?></td>
<td><?php echo $row['reason']; ?></td>
<td><?php echo $row['leave_type']; ?></td>
<td><?php echo $row['status']; ?></td>
<td>
<?php if($row['status']=='Pending'){ ?>
<a href="staff.php?action=approve&id=<?php echo $row['id']; ?>">Approve</a> | 
<a href="staff.php?action=reject&id=<?php echo $row['id']; ?>">Reject</a>
<?php } else { echo '-'; } ?>
</td>
</tr>
<?php } ?>
</table>
<a href="javascript:history.back()" class="back-btn">← Back</a>

</div>
</body>
</html>