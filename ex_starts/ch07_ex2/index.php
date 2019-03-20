<?php 
//set default value of variables for initial page load
if (!isset($investment)) { $investment = '10000'; } 
if (!isset($interest_rate)) { $interest_rate = '5'; } 
if (!isset($years)) { $years = '5'; } 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Future Value Calculator</title>
        <link rel="stylesheet" type="text/css" href="main.css"/>
    </head>

    <body>
        <main>
            <h1>Future Value Calculator</h1>
            <?php if (!empty($error_message)) { ?>
            <p class="error"><?php echo $error_message; ?></p>
            <?php } // end if ?>
            <form action="display_results.php" method="post">

                <div id="data">
                    <label>Investment Amount:</label>
                    <p>
                        <select name="investment">
                            <option value="">Amount</option>
                            <option value="10000">10000</option>
                            <option value="15000">15000</option>
                            <option value="20000">20000</option>
                            <option value="25000">25000</option>
                            <option value="30000">30000</option>
                            <option value="35000">35000</option>
                            <option value="40000">40000</option>
                            <option value="45000">45000</option>
                            <option value="50000">50000</option>
                        </select>
                    </p>

                    <label>Yearly Interest Rate:</label>
                    <p>
                        <select name="interest_rate">
                            <option value="">Rate</option>
                            <option value="4">4</option>
                            <option value="4.5">4.5</option>
                            <option value="5">5</option>
                            <option value="5.5">5.5</option>
                            <option value="6">6</option>
                            <option value="6.5">5.6</option>
                            <option value="7">7</option>
                            <option value="7.5">7.5</option>
                            <option value="8">8</option>
                            <option value="8.5">8.5</option>
                            <option value="9">9</option>
                            <option value="9.5">9.5</option>
                            <option value="10">10</option>
                            <option value="10.5">10.5</option>
                            <option value="11">11</option>
                            <option value="11.5">11.5</option>
                            <option value="12">12</option>
                        </select>
                    </p>

                    <label>Number of Years:</label>
                    <input type="text" name="years"
                           value="<?php echo $years; ?>"/><br>
                </div>

                <div id="buttons">
                    <label>&nbsp;</label>
                    <input type="submit" value="Calculate"/><br>
                </div>

            </form>
        </main>
    </body>
</html>