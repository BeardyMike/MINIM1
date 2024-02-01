<div class="container">
    <h1>Login</h1>
    <form action="<?php echo URL; ?>login/success" method="POST" id="login_form">
        <label>Username:</label>
        <br>
        <input type="text" placeholder="User123" name="user_name" value="" required />
        <br><br>
        <label>Password</label>
        <br>
        <input type="password" placeholder="MyPassword123" name="user_password" value="" required />
        <br><br>
        <input type="submit" class="login-button" name="login" value="Log in" />
    </form>
</div>
<div class="container">
    <div id="login_response"></div>
</div>
