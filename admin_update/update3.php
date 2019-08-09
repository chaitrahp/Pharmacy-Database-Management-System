<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Medicio</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        
        <div class="container navigation">
        
            <div class="navbar-header page-scroll">
                
                <a class="navbar-brand" href="index.html">
                    <img src="img/logo.png" alt="" width="150" height="40" />
                </a>
                
                <br>

            </div>
            <a href="admin.php" style="float:right; padding-top: 1px; padding-left: 1000px; color: black;"><b><u>Back</u></b></a>
        </div>
    </nav>
<br>
<br>
    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action="update3_config.php">
                        <h2 class="form-title">Update Hospital</h2>
                        <div class="form-group">
                            <input type="password" class="form-input" name="hospid" id="hospid" placeholder="Hospital Id" required="required" />
                        </div>
                        <div class="form-group">
                            <input type="text"  class="form-input" name="hospname" id="hospname" placeholder="Name" required="required" />
                        </div>
                        
                        
                         <div class="form-group">
                            <input type="text" class="form-input" name="location" id="location" placeholder="Location" required="required" />
                        </div>
                         
                         <div class="form-group">
                            <input type="text" class="form-input" name="email" id="email" placeholder="email" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="phone" id="phone" placeholder="Phone No" required="required" />
                        </div>
                        
                        <div class="form-group">
                            <input type="submit"  name="update" id="submit" class="form-submit" value="Update"/>
                        </div>
                    </form>
                    
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>