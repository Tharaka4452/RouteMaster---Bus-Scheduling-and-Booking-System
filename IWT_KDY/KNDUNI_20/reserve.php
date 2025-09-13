<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="reserve.css">
</head>
<body>


<section>
        
        <nav class="nav1">
            <div class="logo">
                <img src="logo1.png" alt="Logo">
            </div>

            <div class="Brandname">
                <h1>Route Master</h1>
            </div>

            <div class="btn">
                <ul type="none">
                    <button class="login" id="lg" onmouseclick="myFunction()">LogIn</button>
                    <button class="Signup" id="snp">Signup</button>
                </ul>
            </div>
        </nav>
                

    </section>

    <section>
        
        <nav class= "nav2">
            <div class="nav3">
                <div class="btnn">
                    <a href="Homepage.php">Home</a>
                    <a href="reserve.php">Reserve</a>
                    <a href="">Tickets</a>
                    <a href="ContactUs.php">Contact Us</a>
                    <a href="Aboutus.php">About Us</a>
                    <span></span>
                    <input style="margin-left: auto; margin-right: 10px;" type="text1" placeholder="Search..">
                </div>
            </div>
        </nav>
                
    </section>

<div class="container">
    <h1 style="margin: 0 0 0 26px;">Destination Selection</h1>
    <form id="destinationForm" method="post" action="reservepageinsert.php" >
        <div class="form-group">
        <label for="From">From</label>
        <input type="text" name="start" placeholder="From" required><br><br>

        </div>
        <div class="form-group">
        <label for="To">To</label>
        <input type="text" name="end" placeholder="To" required><br><br>
           
        </div>
        <div class="form-group">
            <label for="date">Select Date:</label>
            <input type="date" id="date" name="date" required>
        </div><br>
        <button type="submit" name="submit">Submit</button>
    </form>
</div>

<footer style="color:black;">
        <div style="text-decoration: none;">
            <h2>Quick Access</h2>
            <p><a href="">Home</a></p>
            <p><a href="">Reserve</a></p>
            <p><a href="">Tickets</a></p>
            <p><a href="">About Us</a></p>
        </div>
        <div>
            <h2>Contact Us</h2>
            <p>userone@gmail.com</p>
            <p>+94 77 589 3213</p>
            <p>RouteMaster/facebook.com</p>
            
        </div>
        <div>
            <h2>privacy policy</h2>
            <p><a href="termsandconditions.php">Terms & Condition</a></p>
            <p>Follow</p>
            <p><a href="feedback.php">Feedback</a></p>
            
        </div>


    </footer>

<script src="script.js"></script>
</body>
</html>