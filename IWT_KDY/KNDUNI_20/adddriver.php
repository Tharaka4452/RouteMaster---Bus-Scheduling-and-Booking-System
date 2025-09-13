<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver Management</title>
    <link rel="stylesheet" href="styleadddriver.css">
</head>
<body>
    <div class="container">
        <h1>Driver Management</h1>
        <form id="driver-form" action="adddriverinsert.php" method="post">
            <div class="form-group">
                <label for="driver-name">Driver Name</label>
                <input type="text" id="driver-name" name="DriverName" required>
            </div>
            <div class="form-group">
                <label for="driver-id">Driver ID</label>
                <input type="text" id="driver-id" name="username" required>
            </div>
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="birthday">Birthday</label>
                <input type="date" id="birthday" name="DoB" required>
            </div>

            <div class="form-group">
                <label for="phone-no">Phone Number</label>
                <input type="phonenumber" id="phone-number" name="phoneno" required>
            </div>
            
            <div class="form-group">
                <label for="license-number">License Number</label>
                <input type="text" id="license-number" name="LicenseNo" required>
            </div>
            
            <div class="form-group">
                <label for="license-expire-date">License Expire Date</label>
                <input type="date" id="license-expire-date" name="LicenseExpireDate" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            
            <button type="submit">Add Driver</button>
        </form>

        <h2>Driver List</h2>
        <div id="driver-list"></div>
    </div>

    <script src="script.js"></script>
</body>
</html>
