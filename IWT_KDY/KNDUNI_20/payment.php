<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <link rel="stylesheet" href="stylepayment.css">
</head>
<body>
<form class="form1" method="post" action="paymentinsert.php">
    <div class="container">
        <div class="payment-details">
            <h2>Payment Details</h2>
            <div class="card-type">
                <label for="Cardtype">Card type:</label>
                <input type="radio" id="mastercard" name="card-type" value="mastercard" checked>
                <img src="Mastercard-Download-PNG.png" alt="Mastercard"></label>
                <input type="radio" id="visa" name="card-type" value="visa">
                <img src="659dc3b6a60614bbc569f89e_Prepaid Cards_Visa.png" alt="Visa"></label>
            </div>
            <input type="text" placeholder="Card Holder's Name" name="chname">
            <input type="text" placeholder="Card Number" name="cardnumber">
            <div class="expiration">
                <input type="text" placeholder="Expiration Month">
                <input type="text" placeholder="Expiration Year">
                <input type="text" placeholder="CVN">
            </div>
           <button id="proceed-btn">Proceed to Pay</button>
        </div>
        <div class="your-order">
            <h2>Your Order</h2>
            <div class="total-amount">
                Total Amount: <span id="total-amount:"> Rs: 0.00</span>
            </div>
            <button id="cancel-btn">Cancel</button>
        </div>
    </div>
</form>
    <script src="script.js"></script>
</body>
</html>
