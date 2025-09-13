<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver Login</title>
    <link rel="stylesheet" href="adminstyle.css">
</head>

<body>
    <div class="container">
        <h1>Welcome Admin</h1>
        <h3>Sign in to your account</h3>
        <form id="feedbackForm" method="POST" action="adminlogininsert.php">
            <div class="form-group">
                <label for="User_name">User_name</label>
                <input type="text" id="User_name" name="User_name" required>
            </div>
            <div class="form-group">
                <label for="Password">Password</label>
                <input type="Password" id="Password" name="Password" required>
            </div>
            <div class="form-group">
                <input type="checkbox" id="remember-me">
                <label for="remember-me">Remember me</label>
            </div>
            <div class="form-group">
                <a href="#" id="forgot-Password">Forgot Password?</a>
            </div>
            <button type="submit" name="Login">Login</button>
        </form>
    </div>

    <script src="script.js"></script>
</body>

</html>