<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Form</title>
<link rel="stylesheet" href="Contactus.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                    <a href="passengerLogIn.php"><button class="login" id="lg" onmouseclick="myFunction()">LogIn</button></a>
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
                    <a href="https://chatgpt.com/?oai-dm=1">Tickets</a>
                    <a href="ContactUs.php">Contact Us</a>
                    <a href="Aboutus.php">About Us</a>
                    <span></span>
                    <input style="margin-left: auto; margin-right: 10px;" type="text" placeholder="Search..">
                </div>
            </div>
        </nav>
                
    </section>

    <div class="contact-form">
      <h2>Contact Us</h2>
      <form action="" method="post">
        <div class="form-group">
          <label for="name">Full Name</label>
          <input type="text" id="name" name="name" placeholder="Your Name" required>
        </div>
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" id="email" name="email" placeholder="Your Email" required>
        </div>
        
        <div class="form-group">
          <label for="message">Message</label>
          <textarea id="message" name="message" rows="4" placeholder="Your Message" required></textarea>
        </div>
        <div class="button-container">
          <button type="submit">Send Message</button>
        </div>
      </form>
      <div class="contact-info">
        <h3>Contact Info</h3>
        <ul type="none">
          <li><i class="fas fa-phone"></i> Phone: + 94 77 8468 133</li>
          <li><i class="fas fa-envelope"></i> Email: RouteMaster@gmail.com</li>
          <li><i class="fas fa-map-marker-alt"></i> Address: no.45/1 palawaththa road,baththaramulla</li>
          <li><i class="fas fa-globe"></i> Website: RouteMasterBussite.com</li>
        </ul>
      </div>
    
    
  </div>
  <footer>
        <div>
            <h2>Quick Access</h2>
            <p><a href="Homepage.php">Home</a></p>
            <p><a href="reserve.php">Reserve</a></p>
            <p><a href="ContactUs.php">Tickets</a></p>
            <p><a href="Aboutus.php">About Us</a></p>
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

  <script src="https://kit.fontawesome.com/your_fontawesome_kit_id.js"></script>
</body>
</html>

