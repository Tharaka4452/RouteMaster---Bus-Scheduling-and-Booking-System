<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver Login</title>
    <link rel="stylesheet" href="adminstyle.css">
</head>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver Login</title>
    <link rel="stylesheet" href="styledriverlogin.css">
</head>

<body>
    <div class="container">
        <h1>Welcome driver</h1>
        <h3>Sign in to your account</h3>
        <form id="login-form" method="POST" action="driverlogininsert.php">
            <div class="form-group">
                <label for="User_name">Username</label>
                <input type="text" id="User_name" name="User_name" required>
            </div>
            <div class="form-group">
                <label for="Password">Password</label>
                <input type="password" id="Password" name="Password" required>
            </div>
            <div class="form-group">
                <input type="checkbox" id="remember-me">
                <label for="remember-me">Remember me</label>
            </div>
            <div class="form-group">
                <a href="#" id="forgot-password">Forgot password?</a>
            </div>
           <a href="driverportalread.php"> <button type="submit" name="Login">Login</button></a>
        </form>
    </div>

    <script src="script.js"></script>
</body>