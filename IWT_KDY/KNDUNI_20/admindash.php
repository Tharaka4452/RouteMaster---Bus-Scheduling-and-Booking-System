<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admindash.css">
</head>
<body>
    <h1>Welcome Admin</h1>
    <div class="container">
    <a href="pasengersread.php">
        <section id="reserve" class="tab-section">
            <h2>Passenger</h2>
            <p>This is the reserve page content.</p>
        </section>
    </a>

        <section id="tickets" class="tab-section">
            <h2>Buses</h2>
            <p>This is the tickets page content.</p>
        </section>

        <a href="Driver Management.php">
            <section id="contact" class="tab-section">
            <h2>Drivers</h2>
            <p>This is the contact us page content.</p>
        </section></a>

    <a href="feedbackread.php">
        <section id="about" class="tab-section">
            <h2>Help Center & Feedback</h2>
            <p>This is the about us page content.</p>
    </section>
    </a>
    </div>

    <script src="script.js"></script>
</body>
</html>


