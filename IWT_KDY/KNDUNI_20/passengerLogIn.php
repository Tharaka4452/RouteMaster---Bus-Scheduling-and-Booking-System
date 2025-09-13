<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="stylepassengerLogIn.css">
</head>
<body>
    <div class="container">
        <h2>Sign In</h2>
        <form id="signupForm" action="passengerLogIninsert.php" method="post">
            <input type="text" id="User_name" placeholder="Username"  name="User_name"required>
            <input type="password" id="Password" placeholder="Password"  name="Password" required >
            <div class="checkbox">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Remember me</label>
            </div>
            <input type="submit" value="Sign in" name="Login">
        </form>
        <div class="links">
            <a href="#" id="forgotPassword">Forgot password?</a>
            <span>|</span>
            <a href="passregisteration.php" id="dontHaveAccount">Don't have an account?</a>
        </div>
        <div class="links">
            <label id="notPassenger">Not a passenger</label>
            <span>|</span>
            <a href="driverlogin.php"><button id="driver">Driver</button></a>
            <span>|</span>
            <a href=" adminlogin.php"><button id="agent">Agent</button></a>
        </div>
    </div>



    <script src="script.js"></script>
</body>
</html>