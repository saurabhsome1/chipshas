<?php
session_start();
?>

<!DOCTYPE html>
<head>
        <meta charset="utf-8">
        <meta name="viewpotr" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" type="text/css" href="login-style.css">
        
        <title>login by saurabhsome</title>

</head>
<body>
 <div class="center">
    <h1>login</h1>

    <form action="#" method="POST" autocomplete="off">

    <div class="form">
    <input type="text" name="username" class="textfiled" placeholder="username">
    <input type="password" name="password" class="textfiled" placeholder="password">
    <div class="forgetpass"><a href="#" class="link" onclick="message()" >forget password ?</a> </div>
    <input type="submit" name="login" value="login" class="btn">

    <div class="signup"> new member? <a href="#" class="link">signup here</a></div>

    </div>
 </div> 
</form>
 
 <script>
    function message()
    {
        alert("remember password");
    }
 </script>

</body>
</html>

<?php
include("connection.php");

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM form WHERE gmail = '$username' && password = '$password'" ;
    $data = mysqli_query($conn , $query);

    $total = mysqli_num_rows($data);
    //echo $total;

    if($total == 1)
    {
       // echo "login ok";
       $_SESSION['username'] = $username;
       header('location:display.php');
    }
    else
    {
        echo "login failed";
    }
}
?>