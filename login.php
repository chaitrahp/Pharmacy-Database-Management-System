
   

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

<a href="index.html" style="float:right; padding-top: 40px; padding-right: 40px; color: black;"><b><u>Back home</u></b></a>
            </div>

            


    
       
    <div class="login-wrap">
        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
            <div class="login-form">
                <form class="sign-in-htm" action="config.php" method="POST">
                    <div class="group">
                        <label for="user" class="label">Name</label>
                        <input id="name1"  name="name1" type="text" class="input"  required="required" method="POST">
                    </div>
                    <div class="group">
                        <label for="pass" class="label"  >Patient Id</label>
                        <input id="pid1" name="pid1" type="password"  class="input" required="required" onkeyup="sync()" data-type="password" method="POST" >
                    </div>
                     <div class="group">
                        <label for="pass" class="label"  >Confirm Patient Id</label>
                        <input id="pid2" name="pid2" type="password"  class="input" required="required" data-type="password" method="POST" >
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
                        <a href="#forgot">Forgot Patient Id?</a>
                    </div>
                </form>
                <form class="sign-up-htm" method="POST" action="config.php" >
                    <div class="group">
                        <label for="user" class="label">Patient Id</label>
                        <input id="pid2" name="pid2" type="password" class="input"  required="required" method="POST" >
                    </div>
                    
                    <div class="group">
                        <label for="pass" class="label">Name</label>
                        <input id="name2" name="name2" type="text" onkeyup="sync()" class="input" required="required"  method="POST" >
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Disease</label>
                        <input id="disease"  name="disease" class="input" required="true" type="text" method="POST" >
                    </div>
                     <div class="group">
                        <label for="pass" class="label">Gender</label>
                        <input id="gender" type="text" name="gender" class="input" required="true"  method="POST" >
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Doctor Id</label>
                        <input id="doctid" type="password" name="doctid" class="input" required="true" data-type="password" method="POST" >
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Phone No</label>
                        <input id="phno" type="text" name="phno" class="input" required="true" data-type="password" method="POST" >
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
  var n1 = document.getElementById('pid1');
  var n2 = document.getElementById('pid2');
  n2.value = n1.value;
}

  }
  
</script>
</body>
</html>