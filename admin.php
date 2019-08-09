
   

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SignUp</title>
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
    <link rel="stylesheet" type="text/css" href="sty.css">
    <style>
        body {
            /*background: url(img/photo/1.jpg);
            filter: alpha(opacity=10);
            background-color: #7d5fff;*/
            background-image: url(img/photo/1.jpg);
           /* background-blend-mode: lighten;
           height: 600px;*/
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
    
</head>

<body>
	<div class="container navigation" style="padding-top: 60px;padding-left: 40px">
		
            <div class="navbar-header page-scroll">
               
                   
                <a class="navbar-brand" href="index.html">
                    <img src="img/logo.png" alt="" width="150" height="40" />
                </a>


            </div>

            


    
       
    <div class="login-wrap">
        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
            <div class="login-form">
                <form class="sign-in-htm" action="admin_config.php" method="POST">
                    <div class="group">
                        <label for="user" class="label">Name</label>
                        <input id="aname1"  name="aname1" type="text" class="input"  required="required" method="POST">
                    </div>
                    <div class="group">
                        <label for="pass" class="label"  >Pharma Id</label>
                        <input id="phid1" name="phid1" type="password"  class="input" onkeyup="sync()" required="required" data-type="password" method="POST" >
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Confirm Pharma Id</label>
                        <input id="phid2" type="password" name="phid2" class="input" required="true" data-type="password" method="POST" >
                    </div>
                    <div class="group">
                        <input id="check" type="checkbox" class="check" checked>
                        <label for="check"><span class="icon"></span> Keep me Signed in</label>
                    </div>
                    <div class="group">
                        <input type="submit" value="SIGN-IN" id="butt" name="btnsubmit1"method="POST">
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <a href="#forgot">Forgot Pharma Id?</a>
                    </div>
                </form>
                <form class="sign-up-htm" method="POST" action="admin_config.php" >
                    
                    
                   
                    
                    <div class="group">
                        <label for="pass" class="label">Pharma Id</label>
                        <input id="phid2" type="password" name="phid2" class="input" required="true" data-type="password" method="POST" >
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Name</label>
                        <input id="aname2" name="aname2" type="text"  class="input" required="required" method="POST" >
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Location</label>
                        <input id="aloc" name="aloc" type="text"  class="input" required="required" method="POST" >
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Date</label>
                        <input id="adate" name="adate" type="date"  class="input" required="required" method="POST" >
                    </div>
                    

                    <div class="group">
                     <a href="category.php" onclick="a()"><button type="submit" id="butt1" name="btnsubmit" method="POST">SIGN-UP</button></a>

                    </div>
                    <div class="hr"></div>
                    
        </div>
      </form>
    </div>
  </div>
</div>
<script type="text/javascript">
  {

function sync()
{
  var n1 = document.getElementById('phid1');
  var n2 = document.getElementById('phid2');
  n2.value = n1.value;
}

  }
  
</script>
</body>
</html>