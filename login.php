<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="src/css/bootstrap.css">
</head>
<body style="background-color: #e9f1f9;">
    <style>
        .bg-login{
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('dist/img/bgLogin.jpg');
            background-size: cover;
  
        }
    </style>
    <div class="container-fluid d-flex justify-content-center align-items-center vh-100 " style="width: 800px; height:700px">
        <div class="container ">
            <div class="row">
                
    <div class="card rounded-4 " style="background-color: white;">
        <div class="card-body d-flex justify-content-evenly">
        <div class="col-md-5">
            <form action="proses/proses-login.php" method="POST">
                <h1 class="mb-4 mt-3 text-center fw-bold ">Login</h1>
                <div class="mb-3 mt-2">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control bg-transparent border border-black" nama="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control bg-transparent border border-black" nama= "pass" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input bg-transparent border border-black" id="exampleCheck1">
                  <label class="form-check-label " for="exampleCheck1">Remember Me</label>
                </div>
         
                <button type="submit" class="btn btn-primary">Login</button>
              </form>
            </div>
      
    
       

        <div class="col-md-5 align-items-center rounded-start" style="background: linear-gradient(to right, #ff7800, #fdbe00, #ffbf00);">
               
                <h1 class="mb-4 mt-3 text-center fw-bold ">Hello, User !</h1>
                <p>If you don't have an account yet, please register first</p>
                <button type="submit" class="btn btn-primary">register</button>
                </div>
             
             

        </div>
      </div>
    <div>
    </div>
 </div>

</body>
<script src="src/js/bootstrap.js"></script>
</html>