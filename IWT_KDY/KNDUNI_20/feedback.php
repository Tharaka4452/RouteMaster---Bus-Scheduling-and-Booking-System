<!DOCTYPE html>
<html>
<head>
    <title>Feedback & Help center Form</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <form id="feedbackForm" method="POST" action="feedbackinsert.php">
        <h1>Give a Feedback!</h1>
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="Sname" required><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="Semail" required><br>

        <label for="phone">Phone Number:</label><br>
        <input type="tel" id="phone" name="Sphone" pattern="[0-9]{10}" required><br>

        <label for="comment">Comment:</label><br>
        <textarea id="comment" name="Scomment" rows="4" required></textarea><br>

        <input type="submit" value="Submit">
    </form>

    <script src="script.js"></script>
</body>
</html>
