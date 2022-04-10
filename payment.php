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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <title>Make transfer | NAB banking solution</title>
</head>
<body>
  <style>
      * {
          box-sizing: border-box;
          padding: 0;
          margin: 0;
      }
      
      .topper {
          height: 60px;
          width: 100%;
          box-shadow: 3px 3px 5px #666666;
      }

      .int {
          display: flex;
          justify-content: center;
          margin-top: 30px;
      }

      form {
          width: 90vw;
          padding: 20px;
      }

      .international {
          width: 90vw;
          height: 530px;
          box-shadow: 1px 1px 3px 3px #ddd;
          border-radius: 8px;
          padding: 20px;
          display: flex;
          flex-direction: column;
          align-items: center;
      }

      .international h1 {
          font-size: 18px;
          font-weight: BOLDER;
          color: red;
          text-align: center;
          margin-bottom: 20px;
          font-family: 'Source Sans Pro', sans-serif;
      }


      input[type="number"] {
          font-size: 15px;
          padding: 20px;
          color: #000000;
          margin-bottom: 20px;
          width: 100%;
          border: none;
          border-bottom: 0.5px solid black;
      }

      input[type="text"] {
        font-size: 15px;
          padding: 20px;
          color: #000000;
          margin-bottom: 20px;
          width: 100%;
          border: none;
          border-bottom: 0.5px solid black;
      }
      button {
          width: 100%;
          background-color: red;
          color: white;
          border: none;
          padding: 15px 25px;
          border-radius: 5px;
          font-size: 18px;
          font-weight: bolder;
          transition: 1s;
      }

      button:hover {
          border: 1px solid red;
          color: red;
          background-color: white;
          transition: 1s
      }

       
  </style>

    <div class="topper">
        <div class="top" style="display:flex;gap:100px;padding:10px;align-items:center;">
            <a href="home.php"><i class="fa fa-angle-left" style="font-size:50px;color:red"></i></a>
            <h1 style="font-size:18px;">Checking account #7980</h1>
        </div>
    </div>
      <div class="int">
    <div class="international">
        <h1>INTERNATIONAL MONEY TRANSFER</h1>
        <form action="payment.php">
            <div class="input-field">
                <label for="account number">Account number: </label><br>
                <input type="number">
            </div>
            <div class="input-field">
                <label for="routine number">Routine number: </label><br>
                <input type="number">
            </div>
            <div class="input-field">
                <label for="swift code">Swift code: </label><br>
                <input type="number">
            </div>
            <div class="input-field">
                <label for="address">Address: </label><br>
                <input type="text">
            </div>
            <div class="input-field">
                <button id="send-btn" onClick="send()">Send</button>
                
            </div>
        </form>
    </div>
    </div>
    <div class="uni">
        <img src="untitled-1.jpg" alt="uni" width="100%" style="position:fixed;bottom:0;">
    </div>
    <script src="script.js"></script>
</body>
</html>