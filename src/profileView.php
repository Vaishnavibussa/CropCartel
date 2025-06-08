<?php
    session_start();

	if(!isset($_SESSION['logged_in']) OR $_SESSION['logged_in'] != 1)
	{
		$_SESSION['message'] = "You have to Login to view this page!";
		header("Location: Login/error.php");
	}
?>

<!DOCTYPE HTML>

<html lang="en">
    <head>
        <title>Profile: <?php echo $_SESSION['Username']; ?></title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap\js\bootstrap.min.js"></script>
        <meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="login.css"/>
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<link rel="stylesheet" href="css/skel.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/style-xlarge.css" />

    </head>


    <body>

        <?php
            require 'menu.php';
        ?>

        <section id="one" class="wrapper style1 align">
            <div class="inner">
                <div class="box">
                <header>
                    <center>
                        <!-- //  in below line--this was there after .png'   .$_SESSION['picName'].'?'.mt_rand(); -->
                        <a href="https://www.bing.com/images/search?view=detailV2&ccid=4AuPuG37&id=19157B9E9162A56AD2BBD1AA74FF7040373274A3&thid=OIP.4AuPuG371UtrhrGQO9-VggHaHe&mediaurl=https%3a%2f%2fcdn2.vectorstock.com%2fi%2f1000x1000%2f78%2f56%2ffarmer-symbol-farm-agriculture-healthy-food-vector-33327856.jpg&exph=1010&expw=1000&q=Farmer+Symbol&simid=607988441508170854&FORM=IRPRST&ck=4124CC623CBFBC5CEA20F7025ADD5CD6&selectedIndex=0&itb=0">

<span><img src="<?php echo 'images/profileImages/profile0.png' ?>" class="image-circle" class="img-responsive" height="200%"></span>
</a>
                    <br>
                    <h2><?php echo $_SESSION['Name'];?></h2>
                    <!-- <h4 style="color: black;"><?php echo $_SESSION['Username'];?></h4> -->
                    
                </center>
                </header>
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-3">
                            <b><font size="+2" color="#ffcccc" font-weight="bolder">Ratings : </font></b>
                            <font size="+2"><?php echo $_SESSION['Rating'];?></font>
                        </div>
                        <div class="col-sm-3">
                            <b><font size="+2" color="#ffcccc" font-weight="900" font-size="70px">Email ID : </font></b>
                            <font size="+2"><?php echo $_SESSION['Email'];?></font>
                        </div>
                        <div class="col-sm-3"></div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-3">
                            <b><font size="+2" color="#ffcccc" font-weight="bolder">Mobile No : </font></b>
                            <font size="+2"><?php echo $_SESSION['Mobile'];?></font>
                        </div>
                        <div class="col-sm-3" >
                            <b><font size="+2" color="#ffcccc" font-weight="bolder">Address : </font></b>
                            <font size="+2"><?php echo $_SESSION['Addr'];?></font>
                        </div>
                        <div class="col-sm-3"></div>
                    </div>
                        <div class="12u$">
                            <center>
                                <div class="row uniform">
                                    <div class="3u 12u$(large)">
                                        <a href="changePassPage.php" class="btn btn-danger" style="text-decoration: none; font-weight:500" >CHANGE PASSWORD</a>
                                    </div>
                                    <div class="3u 12u$(large)">
                                        <a href="profileEdit.php" class="btn btn-danger" style="text-decoration: none;">EDIT PROFILE</a>
                                    </div>
                                    <div class="3u 12u$(xsmall)">
            							<a href="uploadProduct.php" class="btn btn-danger" style="text-decoration: none;">UPLOAD PRODUCT</a>
            						</div>
                                    <div class="3u 12u$(large)">
                                        <a href="Login/logout.php" class="btn btn-danger" style="text-decoration: none;">LOG OUT</a>
                                    </div>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <style>
            .col-sm-3{

            }
        </style>

        <!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.scrolly.min.js"></script>
            <script src="assets/js/jquery.scrollex.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>



    </body>
</html>
