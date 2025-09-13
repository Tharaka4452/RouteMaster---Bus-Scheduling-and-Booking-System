<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver Management</title>
    <link rel="stylesheet" href="DriverManagement.css">
</head>
<body>
    <div class="container">
        <h1>Driver Management</h1>
        <form id="driver-form">
            <div class="form-group">
                <label for="Driver_Name">Driver Name</label>
                <input type="text" id="Driver_Name" name="Driver_Name" required>
            </div>
            <div class="form-group">
                <label for="User_name">User name</label>
                <input type="text" id="User_name" name="User_name" required>
            </div>
            <div class="form-group">
                <label for="Email">Email</label>
                <input type="Email" id="Email" name="Email" required>
            </div>
            <div class="form-group">
                <label for="DOB">Birthday</label>
                <input type="date" id="DOB" name="DOB" required>
            </div>
            <div class="form-group">
                <label for="Phone_number">Phone Number</label>
                <input type="tel" id="Phone_number" name="Phone_number" required>
            </div>
            <div class="form-group">
                <label for="license-number">License Number</label>
                <input type="text" id="license-number" name="license-number" required>
            </div>
          
          
           <div class="form-group">
                <label for="License_Exp">License Expire Date</label>
                <input type="date" id="License_Exp" name="License_Exp" required>
            </div>
            
            <button type="submit">Add Driver</button>
        </form>

        
    </div>

    
</body>
</html>
