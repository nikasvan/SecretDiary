
<?php 
session_start();

include("connection.php");

$query = "SELECT diary FROM users WHERE id='".$_SESSION['id']."' LIMIT 1";

$result = mysqli_query($link, $query);

$row= mysqli_fetch_array($result);

$diary = $row['diary'];



 ?>
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
       
        margin-top: 100px;
        text-align: center;
        
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
                    <div class="navbar-header pull-left">
                       
                        <a class="navbar-brand" href="#">P.S.Diary</a>
                    </div>
                    <div id="navbar" class="pull-right">
                       
                             <ul class="navbar-nav nav">
                             <li>
                             	<a href="index.php?logout=1">Log Out</a>
                             </li>
                            

                      </ul>
                    </div>
                </div>
            </nav>

        </div>

     
<div class="container contentContainer" id="topContainer">
<div class="row">
<div class="col-md-6 col-md-offset-3" id="topRow">
<h3>Below Is Your Diary Area. Just Write Down Your Text And It Will be Automatically Saved.</h3>

    <textarea class="form-control" id="textarea"><?php echo $diary; ?></textarea>
 
</div>
</div>
</div>
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script>

    
$('.contentContainer').css('min-height', $(window).height());

$('#textarea').css('height', $(window).height()-225);

$('#textarea').keyup(function(){
	$.post("updatediary.php", {diary: $('#textarea').val()}
		);
});

    </script>
</body>

</html>




 
