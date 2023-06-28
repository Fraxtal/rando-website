<?php  
# Memulakan fungsi session
session_start();

# memanggil fail header.php
include('indheader.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Judge Login</title>
    <link rel="stylesheet" href="loginhakim.css">
</head>
<body>
<div class="center">
         <h1>Judge Login</h1>
         <form action= 'hakim-login-proses.php' method='POST'>
             <div class="txt_field">
                 <input type="text" name="nokp" required>
                 <span></span>
                 <label>NRIC</label>
             </div>
             <div class="txt_field">
                <input type="pwd" name="katalaluan" required>
                <span></span>
                <label>Password</label>
             </div>
             <input type="submit" name="submit" value='Login'>
             <div class="signup_link">
                 Want to go back main page?
                <a href="index.php">Click Me!</a>
             </div>
         </form>
     </div>
</body>
<?php
include('indfooter.php');
?>
</html>