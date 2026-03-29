<!DOCTYPE html>
<html>
<head>
<title>Leave Request</title>
<link rel="stylesheet" href="style.css">
<script src="script.js"></script>
</head>
<body>
<div class="center-box">
<form action="submit.php" method="POST" onsubmit="return validate()">
<h2>Leave Request Form</h2>
<input type="text" id="name" name="name" placeholder="Enter Name">
<input type="text" id="reason" name="reason" placeholder="Reason">
<input type="date" id="date" name="date">
<!-- Branch -->
<select name="branch">
<option value="">Select Branch</option>
<option>CSE</option>
<option>IT</option>
<option>AIDS</option>
</select>
<!-- Class -->
<select name="class">
<option value="">Select Class</option>
<option>1st Year A</option>
<option>2nd Year A</option>
<option>3rd Year A</option>
</select>
<p>Leave Type:</p>
<label class="animated-option">
<input type="radio" name="leave_type" value="Sick Leave">
<span>Sick Leave</span>
</label>
<label class="animated-option">
<input type="radio" name="leave_type" value="Emergency Leave">
<span>Emergency Leave</span>
</label>
<label class="animated-option">
<input type="radio" name="leave_type" value="On Duty">
<span>On Duty</span>
</label>
<!-- Event -->
<select name="event" id="event">
<option value="">Select Event</option>
<option>Symposium</option>
<option>Workshop</option>
<option>Event</option>
</select>
<p>Additional:</p>
<label class="animated-option">
<input type="checkbox" name="additional[]" value="Full Day">
<span>Full Day</span>
</label>
<label class="animated-option">
<input type="checkbox" name="additional[]" value="Half Day">
<span>Half Day</span>
</label>
<input type="submit" value="Submit Request">
<a href="student_login.php" class="back-btn">← Back</a>
</form>
</div>
</body>
</html>