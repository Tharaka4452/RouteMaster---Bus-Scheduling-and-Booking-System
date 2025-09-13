document.addEventListener('DOMContentLoaded', function() {
    const cancelButton = document.getElementById('cancelButton');
    const confirmationMessage = document.getElementById('confirmationMessage');
  
    cancelButton.addEventListener('click', function() {
      const numTickets = document.getElementById('numTickets').value;
      const reason = document.getElementById('reason').value;
      const agreeRefund = document.getElementById('agreeRefund').checked;
  
      if (!agreeRefund) {
        confirmationMessage.textContent = 'Please agree to the refund policy.';
        confirmationMessage.style.color = 'red';
        return;
      }
  
      // Simulate cancellation process
      setTimeout(function() {
        confirmationMessage.textContent = `Successfully canceled ${numTickets} ticket(s) due to ${reason}.`;
        confirmationMessage.style.color = 'green';
      }, 1000); // Change the time according to your needs
    });
  });
  