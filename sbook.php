<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Page</title>
    <link rel="stylesheet" href="index.css">
<link rel="icon" href="img/logo.jpeg">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style>
    .sa{
    justify-content: center;
    align-items: center;
   margin-top: 2rem ;
   margin-left: 20vw;
   margin-right: 20vw;
   border-radius: 10px;
    padding: 3rem;
    background: rgb(216, 170, 178);
   
}
.fill{
    font-family: serif;
    font-weight: bolder;
    margin-top: 1rem;
    font-size: 1.9rem;
}
.label1{
   

}
.input1{
     border: 1px solid;
    border-radius: 8px;
    width: 80%;

}
.input2{
    border: 1px solid;
    border-radius: 5px;
    width: 80%;
    height: 2rem;

}
</style>
</head>
<body>
    <div class="conatiner">
          <div class="row " >
    <h3 class="text-center  fill" style="color: rgb(209, 170, 111);"> Please fill form for Book Room Rent </h3>
            
           <div class="col-7 sa" >
             <form action="">
                    <div class="row" >
                        <div class="col-md-6">
                            <label for="fname" class="label1">First Name</label><br>
                            <input type="text" name="fname" class="input1" id="fname">
                        </div>
                        <div class="col-md-6">
                            <label for="lname" class="label1">Last Name</label><br>
                            <input type="text" name="lname" class="input1" id="lname">
                        </div>
                    </div>
                  <div class="row">
                    <div class="col-md-6 ">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control input1" id="exampleInputEmail1" aria-describedby="emailHelp">
                      
                      </div>
                    <div class="col-md-6 ">
                      <label for="exampleInputEmail1" class="form-label">Mobile Number</label>
                      <input type="email" class="form-control input1" id="exampleInputEmail1" aria-describedby="emailHelp">
                      
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 ">
                        <label > Country </label><br>
                       <select name="" id="" class="input2">
                        <option value="">Choose Your Country</option>
                        <option value="">India</option>
                        </select>
                        </div>
                      
                        <div class="col-md-6 ">
                            <label > State </label><br>
                           <select name="" id="" class="input2">
                            <option value="">Choose Your State</option>
                            <option value="">Bihar</option>
                            <option value="">Uttar Pradesh</option>
                            <option value="">Punjab</option>
                            <option value="">Himachal Pradesh</option>
                            <option value="">Delhi</option>
                            <option value="">Uttarakhand</option>
                            <option value="">Arunachal Pradesh</option>
                            <option value="">Jammu & Kashmir</option>
                            <option value=""> Goa</option>
                            <option value="">Andhra Pradesh</option>
                            </select>
                          
                          </div>
                  </div>
                    <div class="row mt-3">
                       
                       <h3>Address:-</h3>
                        <textarea name="" id="" cols="15" rows="5" placeholder="Enter Your Full Address" style="border-radius: 10px;"></textarea>
                       </fieldset>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-6">
                            <label for="">Adhar-Card Number</label>
                            <br>
                            <input type="text" placeholder=" xxxx-xxxx-xxxx" class="input2" >
                         </div>
                        <div class="col-6">
                            <label for="">Adhar-Card Number</label>
                            <input type="file" class="input2"  >
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-4">
                            <label for="">Booking Date</label>
                            <br>
                            <input type="date" placeholder="dd/mm/yyyy" class="input2" >
                         </div>
                        <div class="col-md-4">
                            <label for=""> checkout date</label><br>
                            <input type="date" class="input2" placeholder="" >
                        </div>
                        <div class="col-md-4">
                            <label for=""> For how many days</label>
                            <input type="number" class="input2"  >
                        </div>
                    </div>
                    <div class="row mt-3">
                       <label for=" la "> <h3> Your Event</h3> </label><br>
                       <textarea name="" id="" cols="12" rows="3"  style="border-radius: 10px;" placeholder="Write  about your Event"></textarea>

                      
                    </div>
                   
                    <br>
                    
                    <button type="submit" class="btn btn-primary float-end">Submit</button>
                  </form>
          
            </div>
          </div>
    </div>
</body>
</html>