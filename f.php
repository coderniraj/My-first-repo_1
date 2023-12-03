<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resset Password</title>
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
            label{
                margin-top: 3rem;
            }
                   
    </style>
    <script>
        
        function Change(){
            var a=document.getElementById('pas1').value;
        var b=document.getElementById('pas').value;
            if(a!=' ')
            {
                if(a===b){
                    alert ("Your Password Changed");
                }
                else{
                    alert ("Please enter same password in both section");
                }

            }
            else{
                alert ("Please Enter password in both section");
            }
           

        }
    </script>
</head>
<body>
   
       
            <button  style="margin-left: 1vw;"><a href="Forget.php">Back</a></button>
        
    
    <div><img src="img/logo.jpeg" height="55vh" alt=""></div>
    <h3 class="fs-1 ">Room Information System For Rent</h3>
    <div class="container " style="margin-left: 20%; margin-right: 20%;"><p class="fs-2  mt-4">Reset Your Password?</p>
    <p class="fs-3 " style="font-weight: 200;margin-bottom: 0px;">Fill out the form below and we will send you an</p>
    <p class="fs-3 " style="font-weight: 200;margin-top: 0px;">email with a link to reset your password.</p>
    
    <form action="" class="fw-300 fs-5" style="margin-top: 8vh;"> Enter Your Old Password <br>
    <input type="text" id="pas1"><br><br>
    Enter Your New Password <br>
    <input type="text" id="pas1"><br>
    <label for="pas"> Conform Your New Password</label><br>
        <input type="text" id="pas" ><br>
    <button class="btn" onclick="Change()"> Change Password</button>

</form>
    </div>
</body>
</html>