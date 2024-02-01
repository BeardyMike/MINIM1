<div class="container">
        <h1>Login</h1>
        <form action="<?php echo URL; ?>login/success" method="POST">
            <label>Username</label>
            <input type="text" name="user_name" value="" required />
            <br>
            <label>Password</label>
            <input type="password" name="user_password" value="" required />
            <br>
            <input type="submit" class="login-button" name="login" value="Log in" />
        </form>
</div>
