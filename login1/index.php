<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login 1</title>
        <link rel="stylesheet" href="style1.css">
    </head>
    <body>
        <div id="container-login1">
            <form action="login.php" method="POST">
                <h3 id="text-main">Your Account</h3>
                <div class="box-form">
                    <p class="text-log">Username</p>
                    <input type="text" name="user_name" placeholder="Key Academy" class="box-label">
                </div>
                <div class="box-form">
                    <p class="text-log">Password</p>
                    <input type="password" name="user_password" placeholder="********" class="box-label">
                </div>
                <div class="box-buttons">
                    <input type="submit" name="btn_log" value="LOGIN" id="btn-login">
                    <input type="button" name="btn_reg" value="REGISTER" id="btn-register">
                </div>
            </form>
        </div>
    </body>
</html>