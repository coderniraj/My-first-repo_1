<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.js"></script>
    <style>
            input{
                height: 9vh;
                 width: 40%;
                 border-radius: 8px;
            }
            .btn{
                background: rgb(198, 96, 96);
                border: 2px solid rgb(198, 96, 96);
                margin-top: 4rem;
                border-radius: 10px;
                height: 6vh;
            }
            .rset{
                text-decoration: none;
                color: black;
            }
    </style>
</head>
<body>
    <button  style="margin-left: 1vw;"><a href="login.php">Back</a></button>
    <div><img src="img/logo.jpeg" height=55vh alt=""></div>
    <h3 class="fs-1">Welcome TO Room site</h3>
    <div class="container " style="margin-left: 20%; margin-right: 20%;"><p class="fs-2  mt-4">Forget Your Password?</p>
    <p class="fs-3 " style="font-weight: 200;margin-bottom: 0px;">Fill out the form below and we will send you an</p>
    <p class="fs-3 " style="font-weight: 200;margin-top: 0px;">email with a link to reset your password.</p>
    
    <form action="" class="fw-300 fs-5" style="margin-top: 8vh;"> Enter Youe Email Address <br>
    <input type="text" ><br>
    <button class="btn"><a href="f.php" class="rset"> Reset Password</a></button>

</form>
    </div>
</body>
</html>