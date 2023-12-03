<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Contact Form </title>
    <link rel="stylesheet" href="tact.css">
</head>
<body>

    <div class="container">
        <form action="contactcode.php" method="post">
            <h2 style="background-color:gray"> Contact  </h2>
            <input type="text" name="name" placeholder="Enter Your Name" required>
            <input type="email" name="email" placeholder="Enter Your Email" required>
            <input type="phone" name="phone" placeholder="Enter Your Phone Number" required>

            <textarea id="message" name="msg" rows="4" placeholder="Write Something"></textarea>
            <button type="submit">Send</button>
        </form>
    </div>
    <!-- Contact -->
</body>
</html>