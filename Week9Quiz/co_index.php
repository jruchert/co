<!DOCTYPE html>
<html>

    <body>
        <main>
            <h1>My Calculator</h1>
            <form action="co_calc.php" method="post">
                <label>x:</label>
                <input type='text' name='x' value='5'/>
                <label>y:</label>
                <input type='text' name='y' value='2.5'/><br/>
                <input type='radio' name='op' value='add'/>
                <label>add</label><br/>
                <input type='radio' name='op' value='sub'/>
                <label>subtract</label><br/>
                <input type='radio' name='op' value='mul'/>
                <label>multiply</label><br/>
                <input type='radio' name='op' value='div'/>
                <label>divide</label><br/>
                <input type='submit' value='Calculate'/><br>
            </form>    
        </main>
    </body>
</html>
