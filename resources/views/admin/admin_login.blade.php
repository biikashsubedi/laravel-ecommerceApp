<!DOCTYPE html>
<html>
    <head>
        <title>Login Page for Bikki Admin Panel</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


        <link href="public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="public/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
       <link href="public/assets/css/sb-admin.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">


    </head>
    <body>
       <center>
        <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
           <form action="/loginme" method="post">
            <div class="form-group">
              <div class="form-label-group">
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
               <input type="text" name="username" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus" required>
               <label for="inputEmail">Username</label>
             </div>
           </div>
           <div class="form-group">
              <div class="form-label-group">
               <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
               <label for="inputPassword">Password</label>
             </div>
           </div>
               <div class="form-group">
                  <div class="checkbox">
                    <label>
                    <!-- <input type="checkbox" value="remember-me"> -->
                  <!-- Remember Password -->
                    </label>
                  </div>
               </div>
               <hr>
               <input class="btn btn-primary btn-block" type="submit" name="login" value="Login">
           </form>
        </div>
        </div>
      </div>
    </div>
       </center>

    <script src="public/assets/vendor/jquery/jquery.min.js"></script>
    <script src="public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="public/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    </body>
</html>