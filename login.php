<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="src/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>
<body style="background-color: #e9f1f9;">
    <style>
        
        .bg-form{
            background-color: #0000000f;
        }
        .btn-login{
            background-color: red;
        }
    </style>
    <div class="container-fluid d-flex justify-content-center align-items-center vh-100 " style=" height:700px; ">
                
    <div class="card rounded-4 d-flex flex-row justify-content-evenly " style="background-color: white;">
        <div class="card-body" style="width: 400px;" >
            <div class="container mt-5 mb-5 text-center">

            <form action="proses/proses-login.php" method="POST">
                <h1 class="mb-4 mt-3  fw-bold ">Sign in</h1>

                <ul class="d-flex justify-content-center list-unstyled">
                    <li class= "m-1 border border-black rounded py-2 px-3"><i class="fa-solid fa-at"></i></li>
                    <li class= "m-1 border border-black rounded py-2 px-3"><i class="fa-brands fa-instagram"></i></li>
                    <li class= "m-1 border border-black rounded py-2 px-3"><i class="fa-brands fa-facebook"></i></li>
                    <li class= "m-1 border border-black rounded py-2 px-3"><i class="fa-brands fa-github"></i></li>
                    
                </ul>
                <p class="">Login use your Email and Password.</p>
                <div class="mb-3 mt-2">
                  <input type="email" class="form-control bg-form  " name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" >
                </div>
                <div class="mb-3">
                  <input type="password" class="form-control bg-form " name= "pass" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="text-center mt-2 mb-2"><a href="" >Forgot your email or your password?</a>
                </div>
         
                <button type="submit" class="btn btn-danger px-5 py-2 text-white">Login</button>
              </form>
              </div>
            </div>
      

        <div class="card-body d-flex align-items-center rounded-start-circle rounded-end-4 " style="background: linear-gradient(to right, #ff7800,  #f79023, #eeb818);); width: 400px;">
               <div class="container py-5 px-3  text-center d-flex flex-column align-items-center">
                <h1 class="mb-4 mt-3 text-center fw-bold ">Granny’s Kitchen</h1>
                <p>If you don't have an account yet, please register first</p>
                <a href="register.php" class="btn btn-outline-danger px-5 py-2 text-white">register</a>
              
                </div>
                </div>
              
             

        </div>
      </div>
  


</body>
<script src="src/js/bootstrap.js"></script>
</html>