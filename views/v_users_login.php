<section class="content">
    <h3>Log in</h3>

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

        
        <div class= 'button'><input type='submit' value='Log in'></div>



    </form>
</section>