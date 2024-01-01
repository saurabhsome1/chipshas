<?php include("connection.php")?>

<!DOCTYPE html>
<html>
    <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title></title>

    </head>
    <body>
        <div class="container">
            <form action="#" method="POST" enctype="multipart/form-data">
            <div class="title">
                MY REGISTRATION FORM FOR PHP
</div>
<div class="form">

<div class="input_field">
        <label>upload image</label>
        <input type="file" name="uploadfile" style="width:100%">

    </div>


    <div class="input_field">
        <label>first name</label>
        <input type="text" class="input" name="fname" required>

    </div>

    <div class="input_field">
        <label> Last name</label>
        <input type="text" class="input"name="lname" required>

    </div>

    <div class="input_field">
        <label>password</label>
        <input type="password" class="input"name="password" required>

    </div>
    <div class="input_field">
        <label>conform password</label>
        <input type="conform password" class="input"name="conpassword" required>

    </div>
    <div class="input_field">
        <label>Gender</label>
        <div class="custom_select">
        <select name="Gender" required>
                <option value="">select</option>
                <option value="male">male</option>
                <option value="female">female</option>
                <option value="other">other</option>
</select>
</div>
</div>
<div class="input_field">
    <label>phone</label>
    <input type="text" class="input" name="phone" required>

</div>

<div class="input_field">
    <label style="margin-right: 100px;">caste</label>
    <input type="radio" name="r1" value="genral" required><label style="margin-left: 5px;">genral</label>
    <input type="radio" name="r1" value="s.c" required><label style="margin-left: 5px;">s.c</label>
    <input type="radio" name="r1" value="s.t" required><label style="margin-left: 5px;">s.t</label>
    <input type="radio" name="r1" value="o.b.c" required><label style="margin-left: 5px;">o.b.c</label>
</div>

<div class="input_field">
    <label style="margin-right: 100px;">language</label>
    <input type="checkbox" name="language[]" value="HINDI"><label style="margin-left: 5px;">HINDI</label>
    <input type="checkbox" name="language[]" value="ENGLISH"><label style="margin-left: 5px;">ENGLISH</label>
    <input type="checkbox" name="language[]" value="URDU"><label style="margin-left: 5px;">URDU</label>
</div>

<div class="input_field">
    <label>gmail</label>
    <input type="text" class="input" name="gmail" required>
</div>

<div class="input_field">
    <label>Address</label>
    <textarea class="textarea" name="address" required></textarea>

</div>

<div class="input_field terms">
    <label class="check">
        <input type="checkbox" required>
        <span class="checkmark"></span>

    </label>
    <p>Agree to terms and conditions</p>
</div>

<div class="input_field">
    <input type="submit" value="register" class="btn" name="register">

</div>
</div>
</form>
</div>


</body>
</html>

<?php
if(isset($_POST["register"]))
{

$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "images/".$filename;
move_uploaded_file($tempname,$folder);


    $fname       = $_POST['fname'];
    $lname       = $_POST['lname'];
    $password    = $_POST['password'];
    $conpassword = $_POST['conpassword'];
    $gender      = $_POST['Gender'];
    $phone       = $_POST['phone'];
    $caste       = $_POST['r1'];

    $language    = $_POST['language'];
    $language1   = implode(",",$language);

    $gmail       = $_POST['gmail'];
    $address     = $_POST['address'];

    //if($fname != "" && $lname != "" && $password != "" && $conpassword != "" && $gender != "" && $email != "" && $phone != "")

    //{

 
    $query = "INSERT INTO FORM (stdimg,fname,lname,password,conpassword,Gender,phone,caste,language,gmail,Address)
     VALUES('$folder','$fname', '$lname','$password','$conpassword','$gender',
     '$phone','$caste','$language1','$gmail','$address')";
      $data = mysqli_query($conn,$query);

     if($data)
     {
        echo "<script> alert('data inserted into database') </script>";

     }
     else
     {
        echo "<script> alert('failed') </script>";
     }
    }

//}



?>
