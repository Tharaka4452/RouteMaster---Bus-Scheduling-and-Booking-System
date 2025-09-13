function calculateRefund() {
    var purchaseAmount = parseFloat(document.getElementById('purchaseAmount').value);
    var refundPercentage = 60; 

    var refundAmount = purchaseAmount * (refundPercentage / 100);

    if (!isNaN(refundAmount)) {
         document.getElementById('refundAmount').innerHTML = "Refund Amount: $" + refundAmount.toFixed(2);
    } else {
        document.getElementById('refundAmount').innerHTML = "Please enter a valid purchase amount.";
    }
}
