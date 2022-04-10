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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Home</title>
</head>
<body>
    <style>
        .profile-section .action {
    display: flex;
    justify-content: space-evenly;
    margin-top: 30px;
}

.profile-section .action .hello i {
    color: white;
    width: 70px;
    height: 70px;
    background-color: red;
    box-shadow: 0.5px 2px 1px 30px red;
    border-radius: 50%; 
    text-align: center;
    border: 3px solid white;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 10px;
}

.profile-section .action i {
    width: 70px;
    height: 70px;
    box-shadow: 0.5px 2px 1px 30px #ddd;
    border-radius: 50%; 
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 10px;
}
    </style>
<div class="profile-section">
    <div class="top" style="display:flex;gap:200px;padding:10px;">
    <b><a href="login.php?logout='1'" style="color: red;">
    <i class="fa fa-angle-left" style="font-size:100px;color:red">
</a>	
    
</i></b>
    <h1 style="font-size:45px;">Checking account #7980</h1>
    </div>
    <hr>
    <div class="row2" style="display:grid;justify-content:center;align-items:center;">
        <p style="font-size:40px;color:#666666;text-align: center;">Checking account 7980</p><br>
        <p style="font-size:50px;color:#666666;text-align: center;margin-top:-5px;">Available balance</p>
        <h1 style="margin-top:-30px;font-family:'Fira Sans Condensed', sans-serif;"><span style="color:green;font-size:70px;"><b>+&nbsp;</b></span><i class="fa fa-dollar" style="font-size:70px;"></i><span style="font-size:70px;">15,204,785.52</span></h1>
        <p style="text-align:center;font-size:28px;margin-top:-10px;">Current balance <i class="fa fa-minus" style="font-size:28px;color:red"></i>&nbsp;<i class="fa fa-dollar" style="font-size:28px;"></i><span style="font-size:28px;">15,058,785.25</span></p>
    </div>
    <div class="action">
        <a href="payment.php" style="text-decoration:none;"><div class="hello"><i class="fa fa-dollar hello" style="font-size:30px;"><br></i></div></a>
        <i class="fa fa-credit-card" style="font-size:30px"></i>
        <i class="fa fa-file-text-o" style="font-size:30px;"><br></i>
    </div>
    <div class="transfer-list" style="display:flex;justify-content:space-between;margin-left:80px;padding: 20px;padding:20px 100px;gap:150px;font-size:20px;">
        <h1>Pay</h1>
        <h1>Details</h1>
        <h1>Statements</h1>
    </div>

    <div class="transfer">
        <img src="transfers.jpg" alt="transfer" width="100%" style="margin-top:30px;margin-bottom:150px;">
    </div>
    <div class="uni">
        <img src="untitled-1.jpg" alt="uni" width="100%" style="position:fixed;bottom:0;">
    </div>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    
</div>
		
</body>
</html>