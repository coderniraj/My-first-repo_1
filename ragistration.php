<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
      .sa{
        border-radius: 10px;
      }
      .ma{
        background-image: linear-gradient(rgb(228, 166, 166),rgb(130, 130, 174),rgb(134, 205, 134)) ;
      }
    </style>
</head>
<body>
  
    <div class="container mt-5" style="margin-left: 30%; ;">
        <div class="col-6 ma" style="border: 2px solid;padding: 2rem; border-radius: 10px;">
            <h3 class="text-sm-center">Registration Form</h3>
    <form action="registrationcode.php" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label fw-bold fs-5">Username</label>
            <input type="text" name="name" class="form-control sa" id="exampleInputEmail1" aria-describedby="emailHelp">
            
          </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label fw-bold fs-5">Email address</label>
          <input type="email" name="email" class="form-control sa" id="exampleInputEmail1" aria-describedby="emailHelp">
         
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label fw-bold fs-5">Mobile</label>
            <input type="number" name="mob" class="form-control sa" id="exampleInputEmail1" aria-describedby="emailHelp">
           
          </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label fw-bold fs-5">Password</label>
          <input type="password" name="pass"  class="form-control sa" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
        
         
        </div>
        <button type="submit" class="btn btn-primary fw-bold fs-5 sa">Submit</button>
      </form> 
    </div>
    </div>

</body>
</html>