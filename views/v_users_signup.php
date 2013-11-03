<h2>Sign Up</h2>

<form method='POST' action='/users/p_signup'>

	First Name <input type='text' name='first_name' placeholder="Enter first name" <?php if (isset($_POST['first_name'])) echo "value= '". $_POST['first_name'] ."'"?>><br>
	Last name <input type='text' name='last_name' placeholder="Enter last name" <?php if (isset($_POST['last_name'])) echo "value= '". $_POST['last_name'] ."'"?>><br>
    Email <input type='text' name='email' placeholder="Enter email" <?php if (isset($_POST['email'])) echo "value= '". $_POST['email'] ."'"?>><br>
    Password <input type='password' name='password' placeholder="Enter password"><br>
    Retype Password <input type='password' name='retype' placeholder="Retype password"><br>
    
    <!-- warn on signup errors -->
    <?php if (isset($error)): ?>
       <h4> Signup failed. </h4>
       <?php echo $error; ?>
    <?php endif; ?>

    <input type='submit' value='Sign Up'>


</form>