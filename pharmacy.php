<?php
session_start();

?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<!DOCTYPE html>
<html>
<head>
  <title>Medicio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
    body{
      margin:0;
     background-color: #F2F3F4;
    }
    @font-face {
  font-family: intro;
  src: url(AlegreyaSC-Italic.ttf);
  }
    .first {
      height: 200px;
    }
    #name{
      float: left;
      font-size: 25px;
      font-family:serif;

    }
    .topnav{
      background-color: white;
      width: 100%;
      z-index: 10;
      box-shadow: 1px 1px 10px #888888;
      height: 130px;
    }

.sec1{
  display: block;
  margin-top:15%;
  margin-left:30%;
  box-shadow: 1px 1px 10px #888888;
  border-radius: 10px;
  padding: 30px;
  margin-bottom: 10%;
  background-color: white;
  position: absolute;
}
h1{
  text-align: center;
  font-size: 35px;
  font-family: intro;
}
#one{
  font-size: 20px;
  padding: 50px;
  padding-top: 5px;
}
#logo{
  height: 90px;
  width: 300px;
  margin-left: 30px;
  margin-top:15px;
  left:0;
}
#icon{
  height: 90px;
  width: 90px;
  z-index: 15;
}
.but1{
 width: 80%;
  background:#E74C3C;
  color:#fff;
  border:none;
  position:relative;
  height:45px;
  font-size:1.0em;
  padding:0 2em;
  margin-left: 10%;
  margin-top: 7%;
  cursor:pointer;
  transition:800ms ease all;
  outline:none;
  font-family: newfont;

}.but1:hover{
  background:#fff;
  color:#E74C3C;
}
.but1:before,.but1:after{
  content:'';
  position:absolute;
  top:0;
  right:0;
  height:2px;
  width:0;
  background: #E74C3C;
  transition:400ms ease all;
}
.but1:after{
  right:inherit;
  top:inherit;
  left:0;
  bottom:0;
}
.but1:hover:before,.but1:hover:after{
  width:100%;
  transition:800ms ease all;
}
.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 125px;
  left: 0;
  background-color: white;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  font-family: intro;
  padding: 7px;
  text-decoration: none;
  font-size: 20px;
  color: black;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
  text-align: center;
}

.sidenav a:hover{
  color: red;
}

.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

.active {
  background-color: black;
  color: white;
}
#leave_grid {
margin-left: 20px;
}
.sec1{
  display: block;
  margin-top:0%;
  margin-left:28%;
  box-shadow: 1px 1px 10px #888888;
  border-radius: 10px;
  padding: 30px;
  margin-bottom: 10%;
  background-color: white;
  position: absolute;
}
 body {
            /*background: url(img/photo/1.jpg);
            filter: alpha(opacity=10);
            background-color: #7d5fff;*/
            background-image: url(img/photo/9.jpg);
           /* background-blend-mode: lighten;
           height: 600px;*/
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        h2
        {
          padding-top: 100px;
          padding-left: 100px;
        }
        form {
          color: black;


          padding-left: 100px;
        }
</style>
</head>
<body>

  <?php
     include("response.php");

    $newObj = new Pharma();
    $pharma = $newObj->getPharmaRecord();
  ?>

  <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
  
        <div class="container navigation">
    
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="img/logo.png" alt="" width="150" height="40" />
                </a>
                <a href="user1.html" style="float:right; padding-top: 1px; padding-left: 1000px; color: black;"><b><u>Back</u></b></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            
        </div>
        <!-- /.container -->
    </nav>

    <h2>Get the Details of Pharmacies</h2>
    <br>

  
<div>
  <section class="sec1">
<table id="leave_grid" class="table" width="100%" cellspacing="0">
  <thead>
    
    <tr>
      <th style="width:170px">Name</th>
      <th style="width:170px">Location</th>
      
    </tr>
  </thead>
  <tbody>
    <?php foreach($pharma as $key => $emp) :?>
    <tr>
      <td><?php echo $emp['name'] ?></td>
      <td><?php echo $emp['location'] ?></td>
     
    </tr>
  <?php endforeach;?>
  </tbody>
</table>
</section>
</div>
<body>
</html>
