
<!DOCTYPE html>
<html lang=en>

    <head>
        <title>Register</title>
        <link rel="stylesheet" type="text/css" href="main.css" />
    </head>

    <body>
        <header><h1>Register</h1></header>
        <main>
            <td>
                <div class="form-class">
                    <form action="register.php" method="post">
                        <label>Name</label>
                        <input type="text" name="name">
                        <p/>
                        <label>Password</label>
                        <input type="text" name="pass">
                        <p/>
                        <input type="submit" value="Register">
                    </form>
                    <br>
                </div>
            </td>
            <br>
        </main>
        <footer>
            <p>&copy; <?php echo date('Y'); ?> My Guitar Shop, Inc.</p>
        </footer>
    </body>
</html>