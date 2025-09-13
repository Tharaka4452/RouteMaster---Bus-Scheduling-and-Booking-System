<!DOCTYPE html>
<html lang="en">
<head>
<style>
.seat {
  background-color: #4CAF50;
  color: white;
  padding: 15px;
  margin: 15px;
  cursor: pointer;
  border:none;
}
.selected {
  background-color: #D32F2F;
}


.seat:nth-child(5n +3) {
  margin-right: 40px;
}
h1{
  font-size: 45px;
  justify-content:center;
  color: black;
}
#seatSelection{
  padding:10px 30px;
  background-color:white;
  width:400px;
  border-radius:10px;

}

.div1{
  display:flex;
  flex-direction:row;
  gap: 200px;
  margin:120px;
}
</style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="div1">
  <div id="seatSelection">
  <h1>Seat Selection</h1>
  
  </div>
  
  <script>
  let selectedSeats = [];
  
  
  function generateSeats() {
    let seatNumber = 1;
    for (let row = 0; row < 11; row++) {
      let seatRow = document.createElement('div');
      seatRow.className = 'seat-row';
      for (let col = 0; col < 5; col++) {
        
        if (row === 9 && col >= 3) {
          continue;
        }
        let seat = document.createElement('button');
        seat.innerText = seatNumber++;
        seat.className = 'seat';
        seat.onclick = function() { selectSeat(seat.innerText); };
        seatRow.appendChild(seat);
      }
      document.getElementById('seatSelection').appendChild(seatRow);
    }
  }
  
  
  
 
  function selectSeat(seatNumber) {
    let index = selectedSeats.indexOf(seatNumber);
    if (index === -1) {
      
      if (selectedSeats.length >= 5) {
        alert('You can select up to 6 seats.');
        return;
      }
      selectedSeats.push(seatNumber);
    } else {
     
      selectedSeats.splice(index, 1);
    }
  
   
    let seats = document.querySelectorAll('.seat');
    seats.forEach(seat => {
      if (seat.innerText === seatNumber) {
        seat.classList.toggle('selected');
      }
    });
  
    
    document.getElementById('displaySeats').innerText = selectedSeats.join(', ');
  }
  

  window.onload = generateSeats;
  </script>
  
  <section>
    <div class="details">
      <form class="form1" method="post" action="procedtopayinsert.php">
        <center>
            <p>Please fill this form to book your ticket.</p>
        </center>
        <hr>
        <label for="Name">Name</label>
        <input type="text" name="name" style="border: radius 30px;" required><br><br>
        
        <label for="E-mail">E-mail</label>
        <input type="text" name="email" style="border: radius 30px;" required><br><br>

        <label for="nic">NIC/Passport no</label>
        <input type="text" name="nic" style="border: radius 30px;" required><br><br>

        <label for="Phone">Phone Number</label>
        <input type="text" name="phoneno" style="border: radius 30px;" required><br><br>

        <label for="seatno"> Seat number : <span id="displaySeats"></span> </label>
        <input type="text" name="seatno" value="seatno" style="border: radius 30px;"><br><br>

        <label for="Date">Booking Date</label>
        <input type="date" name="bdate" style="border: radius 30px;" required><br><br>
        
        
        <input type="checkbox" required>
        <label>I agree with <a href=""> Terms & Condition</a></label> <br><br>
        <input type="submit" class="button" value="Proced to pay"><br><br>
        </hr>
      </form>
    </div>
  </section>

  </div>

  
</body>
</html>