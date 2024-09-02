<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/loginS.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300&display=swap" rel="stylesheet">
    <title>Login Page</title>
</head>
<body>
    <div class="body-container">
    <div class="container" id="container">

        <div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <form action="proses_login.php">
                    <h1>Welcome Back!</h1>
                    <p>
                        Start from where you left
                    </p>
                    <div class="btn-grad" id="signIn">Sign In</div>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Buddy!</h1>
                    <p>Join Us on a new adventure</p>
                    <a href="register.php" class="btn-haha">Register</a>
                    </form>
                </div>
            </div>
        </div>
        </div>

        <div class="form-container sign-in-container">
            <form action="proses_login.php" method="post">
                <h1>Sign In</h1>
                <input type="text" name="username" placeholder="Username" />
                <input type="password" name="password" placeholder="Password" />
                <a href="#">Forgot your password?</a>
                <input type="submit" name="login" class="btn-grad" value="Sign in"> 
                <!-- <div class="btn-grad">Sign In</div> -->
            </form>
        </div>
        </div>
    </div>

    </div>
    <script type="text/javascript" src="css/index.js"></script>
</body>
</html>