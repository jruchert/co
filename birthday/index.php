<?php 
    //set default value of variables for initial page load
    if (!isset($dob)) { $dob = ''; } 
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
    <form action="display_days.php" method="post">

        <div id="data">
            <label>Date of birth</label>
            <input type="text" name="dob"
                   value="<?php echo htmlspecialchars($dob); ?>">
            <br>

           <!-- <label>DD</label>
            <input type="text" name="day"
                   value="<?php echo htmlspecialchars($day); ?>">
            <br>

            <label>YYYY</label>
            <input type="text" name="year"
                   value="<?php echo htmlspecialchars($year); ?>">
            <br>-->
        </div>

        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate"><br>
        </div>

    </form>
    </main>
</body>
</html>