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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="text-center">
    <form class="container" action="login.php" method="post">

<div><?php include("errors.php"); ?></div>

    <a href="../home.html" class="logo">
    <img class="mb-4" src="../images/BrainFace.png" alt="" width="77" height="80">    
    </a>

    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
    
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="username" value="<?php echo $username; ?>" placeholder="UserName">
            <label for="floatingInput">UserName</label>
        </div>

        <div class="form-floating mb-3">
            <input type="password" class="form-control" name="password" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary mb-3" name="signIn" type="submit">Sign in</button>

        <p>
          Not yet a member? <a href="register.php">Sign Up</a>
  	    </p>
    </form>
</body>
</html>