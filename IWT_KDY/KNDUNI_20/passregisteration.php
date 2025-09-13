<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="stylepassengerR.css">
</head>
<body>
  <section>
    <div class="details">
      <form class="form1" method="post" action="passregisterationinsert.php">
        <h1>Create Account</h1>
        
        <label for="Name">Name</label>
        <input type="text" name="name" required><br><br>
        <label for="User Name">User Name</label>
        <input type="text" name="username" required><br><br>
        <label for="E-mail">E-mail</label>
        <input type="text" name="email" required><br><br>
        <label for="Address">Address</label>
        <input type="text" name="address" required><br><br>
        <label for="Phone">Phone Number</label>
        <input type="text" name="phoneno" required><br><br>
        <label for="Password">Password</label>
        <input type="password" name="password" required><br><br>
        <label for="Confirm Password">Confirm Password</label>
        <input type="password" name="confirmpassword" required><br><br>
        
        <input type="checkbox" required>
        <label>Creating your account and you accepting <a href=""> Terms & Condition</a></label>
        <br><br><input type="submit" class="button" value="Create Account"><br><br>
        <b>Already have an account <a href="">Sign in</a></b><br><br>
      </form>
    </div>
  </section>
  
</body>
</html>
