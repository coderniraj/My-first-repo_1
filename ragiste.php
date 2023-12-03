<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta http-equip="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
        <link rel="stylesheet" href="register.css">
        <title>Forms</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <body style="background-image: -moz-element url(ektaworld.jpg);">
        <center>
            <div class="container mt-5">
       <h3><b>Registration Form</b></h3>


       
        <form>
             
         <table>
            <tr>
                <td>
        <label for="username"><b>Email</b></label></td>
        <td>
        <input type="text" placeholder="Email or Phone" id="username" required></td>
        </tr>
      <tr>
        <td>
        <label for="password"><b>Password</b></label></td>
        <td>
        <input type="password" placeholder="Password" id="password" required></td>
      </tr>
         <tr>
            <td>
        <label for="password-repeat"><b> Repeat Password</b></label></td>
        <td>
        <input type="password" placeholder=" Repeat Password" id="password" required></td>
    </tr>

    <button type="submit">Register</button>

        

<label>
<input type="checkbox" checked="checked" name="remember"></label>

        </table>
        </form>
    </div>
    <div>
        <p>Already have an account?<a href="signup.php">Log in</a> . </p>
    </div>
    
    </center>
    </body>
</html>