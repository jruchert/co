
<!DOCTYPE html>
<html lang=en>

    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="main.css" />
    </head>

    <body>
        <header><h1>Login</h1></header>
        <main>
            <td>
                <div class="form-class">
                    <form action="login.php" method="post">
                        <label>Name</label>
                        <input type="text" name="name">
                        <p/>
                        <label>Password</label>
                        <input type="text" name="pass">
                        <p/>
                        <input type="submit" value="Login">
                    </form>
                    <br>
                    <label>Don't have an account? Why not <a href='register_form.php'>register</a>?</label>
                </div>
            </td>
            <br>
        </main>
        <footer>
            <p>&copy; <?php echo date('Y'); ?> My Guitar Shop, Inc.</p>
        </footer>
    </body>
</html>