<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="book.css">
    <script>
        var currentDateTime = new Date();
var year = currentDateTime.getFullYear();
var month = (currentDateTime.getMonth() + 1);
var date = (currentDateTime.getDate() + 1);

if(date < 10) {
  date = '0' + date;
}
if(month < 10) {
  month = '0' + month;
}

var dateTomorrow = year + "-" + month + "-" + date;
var checkinElem = document.querySelector("#checkin-date");
var checkoutElem = document.querySelector("#checkout-date");

checkinElem.setAttribute("min", dateTomorrow);

checkinElem.onchange = function () {
    checkoutElem.setAttribute("min", this.value);
}
    </script>
    
</head>
<body style="background-image:linear-gradient(rgb(240, 150, 150), rgb(234, 234, 157), rgb(179, 179, 217));">
  
  
    <form action="bookcode.php" method="post" style="border: 2px solid; padding: 1rem; border-radius: 10px; background: rgb(171, 236, 236);">
        <div class="elem-group">
          <label for="name">Your Name</label>
          <input type="text" id="name" name="name" placeholder="name" pattern=[A-Z\sa-z]{3,20} required>
        </div>
        <div class="elem-group">
          <label for="email">Your E-mail</label>
          <input type="email" id="email" name="email" placeholder="@email.com" required>
        </div>
        <div class="elem-group">
          <label for="phone">Your Phone</label>
          <input type="tel" id="phone" name="phone" placeholder="498-348-3872" pattern=(\d{3})-?\s?(\d{3})-?\s?(\d{4}) required>
        </div>
        <hr>
        <div class="elem-group inlined">
          <label for="adult">Adults</label>
          <input type="number" id="adult" name="adult" placeholder="2" min="1" required>
        </div>
        <div class="elem-group inlined">
          <label for="child">Children</label>
          <input type="number" id="child" name="children" placeholder="2" min="0" required>
        </div>
        <div class="elem-group inlined">
          <label for="checkin-date">Check-in Date</label>
          <input type="date" name="ch" id="checkin-date" name="checkin" required>
        </div>
        <div class="elem-group inlined">
          <label for="checkout-date">Check-out Date</label>
          <input type="date" name="out" id="checkout-date" name="checkout" required>
        </div>
        <div class="elem-group">
          <label for="room-selection">Select Room Preference</label>
          <select id="room-selection" name="preference" required>
              <option value="">Choose a Room from the List</option>
              <option value="connecting">Connecting</option>
              <option value="adjoining">Adjoining</option>
              <option value="adjacent">Adjacent</option>
          </select>
        </div>
        <hr>
        <div class="elem-group">
          <label for="message">Anything Else?</label>
          <textarea id="message" name="mesg" placeholder="Tell us anything else that might be important." required></textarea>
        </div>
        <button type="submit">Book The Rooms</button>
      </form>
</body>
</html>