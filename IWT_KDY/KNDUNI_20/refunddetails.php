<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Refund Amount Calculator</title>
<link rel="stylesheet" href="stylerefunddetail.css">
</head>
<body>
<div class="container">
    <h2>Ticket cancelation Successful!</h2>
    <label for="purchaseAmount">Purchase Amount:</label><br>
    <input type="number" id="purchaseAmount" step="0.01" min="0"><br>
    <label for="refundPercentage">Refund Percentage:60%</label>
    <br>
    <button onclick="calculateRefund()">Calculate Refund</button><br>
    <div id="refundAmount"></div>
</div>

  <script src="scriptrefund.js"></script>
</body>
</html>
