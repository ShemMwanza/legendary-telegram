<!DOCTYPE html>
<html>

<head>
    <title>Change Password</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
  
    .Register-box1{
        height: 81vh;
        padding-top: 1px;
    }
    </style>
</head>


<body>
    <div class="body">
      
        <div class="Register-box1">
            
                <h1>Change Password</h1>
            
            <br>

            <form action="processChangePassword.php" method="POST">
                <div class="form1">
                <!-- <h2>Email</h2>
                    <input type="email" name="email" id="input" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;"> -->

                    <h2>Current Password</h2>
                    <input type="password" name="password" id="input" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;">
                    <br><br>
                    <h2>New Password</h2>
                    <input type="password" name="password1" id="input" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;">
                    <h2>Confirm New Password</h2>
                    <input type="password" name="password2" id="input" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;">

                    <br>

                    <button class="Signbtn" type="submit" name="confirmPassword">CONFIRM</button>
                    <br>
                    
                </div>
            </form>
           



        </div>
         <!-- <div class="close">
                <a href=""><i class="fas fa-times"></i></a>

            </div> -->
    </div>
</body>

</html>
