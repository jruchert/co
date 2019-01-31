<?php
    // Get data from the form
    $dob = $_POST['dob'];
    
    // Calculate days
    $entered_date = date_create($dob);
    $today = date_create('now');
    $interval = date_diff($entered_date, $today);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Days Alive Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>How many days have you been alive?</h1>
        
        
        <label>Your DOB is </label>
        <span><?php echo $dob; ?></span><br>
        
        <label>Today is</label>
        <span><?php echo $today->format('Y-m-d'); ?></span><br>

        <label>You have been alive</label>
        <span><?php echo $interval->format('%R%a days'); ?></span><br>
    </main>
</body>
</html>
