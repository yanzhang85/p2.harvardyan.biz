<h2>Log in</h2>

<form method='POST' action='/users/p_login'>

    Email<br>
    <input type='text' name='email'>

    <br><br>

    Password<br>
    <input type='password' name='password'>

    <br><br>

    <?php if($error=='error1'): ?>
        <div class='error'>
            Login failed. Email is incorect. 
        </div>
        <br>

    <?php endif; ?>

    <?php if($error == 'error2'): ?>
        <div class='error'>
            Login failed. Password is incorect. 
        </div>
        <br>

    <?php endif; ?>

    
    <input type='submit' value='Log in'>



</form>