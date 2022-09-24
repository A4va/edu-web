<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
    <style>
        .container{
            margin: 12vh auto !important ; 
            max-width: 40rem !important ;
        }
        p:nth-last-child(1){
            display: inline;
        }
        p:nth-last-child(2){
            display: inline;
        }
        p a kbd{
            background-color: #055160;
        }
        p a{
            text-decoration: none;
        }
    </style>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="text-center">

<div class="container">

<img class="mb-4" src="../images/BrainFace.png" alt="" width="77" height="80">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div>
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>
<div class="p-4 alert alert-success" role="alert">


    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        <p> <a href="../home.php?"><kbd>Go Home</kbd></a> </p>
    	<p> <a href="index.php?logout='1'"><kbd>Logout</kbd></a> </p>
    <?php endif ?>
</div>
</div>

</body>
</html>