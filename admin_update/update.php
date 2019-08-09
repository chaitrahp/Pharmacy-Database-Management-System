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
                <a href="admin.php" style="float:right; padding-top: 1px; padding-left: 1000px; color: black;"><b><u>Back</u></b></a>
                <br>

            </div>
        </div>
    </nav>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action="update_config.php">
                        <h2 class="form-title">Update Drug</h2>
                        <div class="form-group">
                            <input type="password" class="form-input" name="drugid" id="drugid" placeholder="Drug Id"/>
                        </div>
                        <div class="form-group">
                            <input type="text"  class="form-input" name="drugname" id="drugname" placeholder="Name"/>
                        </div>
                        <div class="form-group">
                            <br>
                             <label  class="form-input">Mfg Date</label>
                             <br>
                            <input type="date"  class="form-input" name="mfgdate" id="mfgdate" placeholder="Mfg Date"/>
                            
                        </div>
                        <div class="form-group">
                            <br>
                             <label  class="form-input">Exp Date</label>
                             <br>
                            <input type="date" class="form-input" name="expdate" id="expdate" placeholder="Exp Date"/>
                        </div>
                         <div class="form-group">
                            <input type="text" class="form-input" name="dosage" id="dosage" placeholder="Dosage"/>
                        </div>
                         <div class="form-group">
                            <input type="text" class="form-input" name="price" id="price" placeholder="Price"/>
                        </div>
                         <div class="form-group">
                            <input type="password"  class="form-input" name="doctid" id="doctid" placeholder="Doctor Id"/>
                        </div>
                         <div class="form-group">
                            <input type="password"  class="form-input" name="pharmaid" id="pharmaid" placeholder="Pharma Id"/>
                        </div>
                         <div class="form-group">
                            <input type="password"  class="form-input" name="compid" id="compid" placeholder="Company Id"/>
                        </div>
                         <div class="form-group">
                            <input type="text" class="form-input" name="type" id="type" placeholder="Type"/>
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