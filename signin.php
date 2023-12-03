<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form </title>
    <link rel="stylesheet" href="sign.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body style="background-color:aquamarine;">

    
    <div class="container">
        <h2 class="t-center">Login</h2>
        <form action="">
            <div class="inputDiv">
                <label for="name" class="username">Username</label>
                <div class="userArea">
                    <i class="fa-solid fa-user"></i><input type="text" name="name" id="name"
                        placeholder="Type your username">
                </div>
                <hr>
            </div>
            <div class="inputDiv">
                <label for="password" class="username">Password</label>
                <div class="userArea">
                    <i class="fa-solid fa-key"></i><input type="password" name="password" id="password"
                        placeholder="Type your password">
                </div>
                <hr>
            </div>
              <br/>
              <br/>
            <span class="forgotPassword mt-3"> <a href="sforget.php" target="_blank">Forgot password? </a></span>
            <button class="btn">Login</button>
            <div class="formBottom">
                <ul class="flexUl">
                    <a href="https://www.faceboook.com" target="_blank">
                        <li><i class="fa-brands fa-facebook-f"></i></li>
                    </a>
                    <a href="https://www.twitter.com" target="_blank">
                        <li><i class="fa-brands fa-twitter"></i></li>
                    </a>
                    <a href="https://www.google.com" target="_blank">
                        <li><i class="fa-brands fa-google"></i></li>
                    </a>
                </ul>
                
                <p id="signUp"></p>
    
                
            </div>
        </form>
    </div>
    <!-- sign -->
</body>
</html>