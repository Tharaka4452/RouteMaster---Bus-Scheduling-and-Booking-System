<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ticket Cancellation</title>
<link rel="stylesheet" href="styleTicketCancelation.css">
</head>
<body>
<div class="container">
  <h1>Ticket Cancellation</h1>
  <form id="cancellationForm">
    <label for="numTickets">Number of Tickets to Cancel:</label>
    <select id="numTickets">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>

    </select>
    <label for="reason">Reason for Cancellation:</label>
    <select id="reason">
      <option value="change_of_plans">Change of Plans</option>
      <option value="unexpected_event">Unexpected Event</option>
      <option value="other">Other</option>
    </select>
    <input type="checkbox" id="agreeRefund" style="display: inline; margin: 0;padding: 0;">
    <label for="agreeRefund" style="margin: 0;padding: 0;">Agree to Refund Policy:</label>
    
    <a href="refunddetails.php"><button type="button" id="cancelButton">Confirm Cancellation</button><a>
  </form>
  <div id="confirmationMessage"></div>
</div>
<script src="scriptTicketcancelation.js"></script>
</body>
</html>
