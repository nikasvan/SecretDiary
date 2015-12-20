<?php include("login.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Diary</title>
    <meta charset="utf-8">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <style>
    .navbar-brand{
        font-size: 1.8em;
    }
    
    #topContainer{
        background-image: url("https://ununsplash.imgix.net/photo-1416431168657-a6c4184348ab?q=75&fm=jpg&s=20ba248730c200af0d30c9ba81854867");
        height: 400px;
        width: 100%;
        background-size: cover;
    }
    #topRow{
        margin: auto;
        margin-top: 100px;
        text-align: center;
        font-size: 175%;
    }
    #topRow h1{
        font-size: 300%;
    }
    .bold{
        font-weight: bold;
    }
    .marginTop{
        margin-top: 25px;
    }
    .center{
        text-align: center;
    }
    .title{
        margin-top: 100px;
        font-size: 300%;
    }
    #footer{
        background-color: #60d5e0;
        padding-top: 70px;
        width: auto;
    }
    .marginBottom{
        margin-bottom: 30px;
    }
    .appStoreImage{
        width: 250px
    }
  /*  .asd{
        /*margin-left: 280px;
        margin-right: 280px;*/ 
        /*position: fixed; */
        text-align:center;      
    }*/

    </style>

</head>

<body data-spy="scroll" data-target=".navbar-collapse">
    <div class="navbar-wrapper navbar-fixed-top ">
        <div class="container ">

            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container ">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">P.S.Diary</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                       
                                <form class="navbar-form navbar-right" method="post">
                                <div class="form-group">
                                        
                                    <input type="email" name="loginemail" class="form-control " id="exampleInputEmail1" placeholder="Email" value="<?php echo addslashes($_POST['loginemail']); ?>">
                                </div>

                                <div class="form-group">

        
                                    <input type="password" name="loginpassword" class="form-control " id="exampleInputEmail1" placeholder="Password" value="<?php echo addslashes($_POST['loginpassword']); ?>">

                                </div>

                                        <input type="submit" name="submit" class="btn btn-success" value="Log In"></input>
                                </form>

                                </div>
                            

                      
                    </div>
                </div>
            </nav>

        </div>

     
<div class="container contentContainer" id="topContainer">
<div class="row">
<div class="col-mid-6 col-md-offset-3" id="topRow">
    
    <h1 class="marginTop">Your Secret Diary</h1>
    <p>Your Diary For Future Memories</p>

    <?php

    if ($error) {
        echo "<div class='alert alert-danger'>$error.</div>";
    }

    if ($message) {
        echo "<div class='alert alert-success'>$message.</div>";
    }
    ?>


    <p class="lead">Interested? Then Sign Up Below </p>
    <form class="marginTop" method="post">
        <!-- ====================== -->
<div class="row">

        <div class="form-group col-lg-4 col-lg-offset-4">
            <label for="email">Email Address</label>
    <input type="email" name="email" class="form-control " id="exampleInputEmail1" placeholder="Your Email" value="<?php echo addslashes($_POST['email']); ?>">
</div>


<div class="form-group col-lg-4 col-lg-offset-4">
            <label for="password"> Password</label>
    <input type="password" name="password" class="form-control " id="exampleInputEmail1" placeholder="Password" value="<?php echo addslashes($_POST['password']); ?>">
</div>
  </div>

<!--   ============================
 --><input type="submit" name="submit" value="Sign Up" class="btn btn-success btn-lg marginTop">

    </form>
</div>
</div>
</div>
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script>

    
$('.contentContainer').css('min-height', $(window).height());



    </script>
</body>

</html>




 
