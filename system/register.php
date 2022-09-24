<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="shortcut icon" href="images/BrainFace.png" type="image/x-icon">

    <style>
        body{
            background-color: #f5f5f5 !important;
        }
        .container{
            margin: 12vh auto !important ; 
            max-width: 20rem !important ;
        }
        
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body class="text-center">
    <form class="container" action="register.php" method="post">
<div class="error"><?php include("errors.php"); ?></div>

    <a href="../home.html" class="logo">
    <img class="mb-4" src="../images/BrainFace.png" alt="" width="77" height="80">    
    </a>

    <h1 class="h3 mb-3 fw-normal">Please sign up</h1>
    
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="username" value="<?php echo $username; ?>" placeholder="UserName">
            <label for="floatingInput">UserName</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="email" value="<?php echo $email; ?>" placeholder="name@example.com">
            <label for="floatingInput">Email Address</label>
        </div>

        <div class="form-floating mb-3">
            <input type="password" class="form-control" name="password_1" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>

        <div class="form-floating mb-3">
            <input type="password" class="form-control" name="password_2" placeholder="Confirm Password">
            <label for="floatingPassword">Confirm Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary mb-3" name="signUp" type="submit">Sign up</button>

        <p>
  		Already a member? <a href="login.php">Sign in</a>
  	    </p>
    </form>
    
    
    
    
</body>
</html>