<form action='fill.php' method='post' id='form'>
    <label>First Name:</label>
    <input type='text' name='fname' />
    <br />
    <label>Last Name:</label>
    <input type='text' name='lname' />
    <br />
    <label>Email Address:</label>
    <input type='text' name='email' />
    <br />
    <label>User Name:</label>
    <input type='text' name='user' />
    <br />
    <label>Password:</label>
    <input type='text' name='pass' />
    <p />

    <input type="radio" name="position" value="student" />
    Student
    <br />
    <input type="radio" name="position" value="teacher" />
    Teacher
    <br />
    <input type="radio" name="position" value="community" />
    Community Member
    <p />

    <input type='checkbox' name='options' value='recieve' />
    Agree with <a href=''>TOS</a> ?
    <p />

    <input type='checkbox' name='options' value='recieve' />
    Do you want to receive email?
    <p />

    <input type='submit' value='Submit' />
</form>
