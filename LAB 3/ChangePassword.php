<!DOCTYPE html>
<html>

<head>
    <title>Change Password</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
  
    .Register-box1{
        height: 85vh;
        padding-top: 0px;
    }
    .body{
        padding-top:3%;
    }
    </style>
</head>


<body>
    <div class="body">
      
        <div class="Register-box1">
            
                <h1>Change Password</h1>
            
            <br>

            <form id="formChangePassword" action="processChangePassword.php" method="POST">
                <div class="form1">
                <h2>Email</h2>
                    <input type="email" name="email" id="input" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;">

                    <h2>Current Password</h2>
                    <input type="password" name="password" id="input" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;">
                    <br><br>
                    <h2>New Password</h2>
                    <input type="password" name="password1" id="input" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;">
                    <h2>Confirm New Password</h2>
                    <input type="password" name="password2" id="input" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;">

                    <br>

                    <button class="Signbtn" type="submit" name="confirmPassword">CONFIRM</button>
                    <p id="Message" style='color:red; margin-left: 39px;'></p>
                    <br>
                    
                </div>
            </form>
           



        </div>
         <!-- <div class="close">
                <a href=""><i class="fas fa-times"></i></a>

            </div> -->
    </div>
    <script src="script.js"></script> 
</body>

</html>