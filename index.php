<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Waste-Management-System</title>
      <!-- Google Font: Source Sans Pro -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="asset/fontawesome/css/all.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="asset/css/adminlte.min.css">
   </head>
   <body class="hold-transition login-page">
      <div class="login-box">
         <!-- /.login-logo -->
         <div class="card card-outline card-success">
            <div class="card-header text-center">
               <a href="index.php" class="brand-link">
               <img src="asset/img/logo.png" alt="DSMS Logo" width="200">
               </a>
            </div>
            <div class="card-body" >
               <form action="login.php" method="post">
                  <div class="input-group mb-3">
                     <input type="text" class="form-control" name="username" placeholder="Username">
                     <div class="input-group-append">
                        <div class="input-group-text">
                           <span class="fas fa-user"></span>
                        </div>
                     </div>
                  </div>
                  <div class="input-group mb-3">
                     <input type="password" class="form-control" name="password" placeholder="Password">
                     <div class="input-group-append">
                        <div class="input-group-text">
                           <span class="fas fa-lock"></span>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-6">
                        <button type="submit" name="submit" class="btn btn-block" style="background-color: rgba(28,153,84);color: rgb(235,235,235)">Login</button>
                     </div>
                     <div class="col-6">
                        <a href="register.html" class="btn btn-block" style="background-color: rgba(28,153,84);color: rgb(235,235,235)">Register Account</a>
                     </div>
                  </div>
               </form>
            </div>
            <!-- /.card-body -->
         </div>
         <!-- /.card -->
      </div>
      <!-- /.login-box -->
   </body>
</html>