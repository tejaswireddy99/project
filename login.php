<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Login.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,300,0,0" />
    <title>Login Page</title>
</head>
<body>
    
    <div class="login-card-container">
        <div class="login-card">
            <!-- <div class="login-card-logo">
                <img src="" alt="logo">
            </div> -->
            <div class="login-card-header">
                <h1>Welcome Back</h1>
                <div>Please login with your username and password</div>
            </div>
            <form class="login-card-form" action="login_validate.php" method="post">
                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded">account_circle</span>
                    <input type="text" name="email" placeholder="Enter Username" id="UsernameForm" 
                    autofocus required>
                </div>
                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded">lock</span>
                    <input type="password" name="password" placeholder="Enter Password" id="passwordForm"
                     required>
                </div>
                <div class="form-item-other">
                    <div class="checkbox">
                        <input type="checkbox" id="rememberMeCheckbox" check>
                        <label for="rememberMeCheckbox">Remember me</label>
                    </div>
                    <!-- <a href="#">Forgot your password?</a> -->
                </div>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>

</body>

</html>