

<?php include("connection.php");

session_start();

$ID = $_GET['ID'];


$userprofile = $_SESSION['username'];

if($userprofile == true)
{

}
else
{
    header('location:login.php');
}

$query = "SELECT * FROM form where ID = '$ID'";
$data = mysqli_query($conn, $query); 

$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);

$language = $result['language'];
$language1 = explode(",", $language);

?>

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
            <form action="#" method="POST">
            <div class="title">
                UPDATE STUDENT DETAILS
</div>
<div class="form">
    <div class="input_field">
        <label>first name</label>
        <input type="text" value="<?php echo $result['fname']; ?>" class="input" name="fname" required>

    </div>

    <div class="input_field">
        <label> Last name</label>
        <input type="text" value="<?php echo $result['lname']; ?>"  class="input"name="lname" required>

    </div>

    <div class="input_field">
        <label>password</label>
        <input type="password" value="<?php echo $result['password']; ?>"  class="input"name="password" required>

    </div>
    <div class="input_field">
        <label>conform password</label>
        <input type="conform password" value="<?php echo $result['conpassword']; ?>"  class="input"name="conpassword" required>

    </div>
    <div class="input_field">
        <label>Gender</label>
        <div class="custom_select">

        <select name="Gender" required>
                <option value="">select</option>

                <option value="male"
                <?php
                    if($result['Gender'] == 'male')
                {
                    echo "selected";
                }

                ?>
                >
                    male</option>
                <option value="female"
                <?php
                    if($result['Gender'] == 'female')
                {
                    echo "selected";
                }

                ?>
                > 
                    
                female</option>
                <option value="other"
                <?php
                    if($result['Gender'] == "other")
                {
                    echo "selected";
                }

                ?>
                >
                    
                    other</option>
</select>
</div>
</div>
<div class="input_field">
    <label>phone</label>
    <input type="text" value="<?php echo $result['phone']; ?>"  class="input" name="phone" required>

</div>

<div class="input_field">
    <label style="margin-right: 100px;">caste</label>
    <input type="radio" name="r1" value="genral" required
    
    <?php
    if($result['caste'] == "genral")
    {
        echo "checked";
    }
    ?>
    
    >
    <label style="margin-left: 5px;">genral</label>
    <input type="radio" name="r1" value="s.c" required
    
    <?php
    if($result['caste'] == "s.c")
    {
        echo "checked";
    }
    ?>
    
    >
    <label style="margin-left: 5px;">s.c</label>
    <input type="radio" name="r1" value="s.t" required
    
    
    
    <?php
    if($result['caste'] == "s.t")
    {
        echo "checked";
    }
    ?>
    
    
    >
    <label style="margin-left: 5px;">s.t</label>
    <input type="radio" name="r1" value="o.b.c" required
    
    <?php
    if($result['caste'] == "o.b.c")
    {
        echo "checked";
    }
    ?>
    
    
    >
    <label style="margin-left: 5px;">o.b.c</label>
</div>

<div class="input_field">
    <label>gmail</label>
    <input type="text" value="<?php echo $result['gmail']; ?>"  class="input" name="gmail" required>
</div>



<div class="input_field">
    <label style="margin-right: 100px;">language</label>
    <input type="checkbox" name="language[]" value="HINDI"
    
    <?php
    if(in_array("HINDI",$language1))
    {
        echo "checked";
    }
    ?>
    
    >

    <label style="margin-left: 5px;">HINDI</label>
    <input type="checkbox" name="language[]" value="ENGLISH"
    
    
    <?php
    if(in_array("ENGLISH",$language1))
    {
        echo "checked";
    }
    ?>
   
    
    >

    <label style="margin-left: 5px;">ENGLISH</label>
    <input type="checkbox" name="language[]" value="URDU"
    
    
    <?php
    if(in_array("URDU",$language1))
    {
        echo "checked";
    }
    ?>
   
    
    >
    <label style="margin-left: 5px;">URDU</label>
</div>




<div class="input_field">
    <label>Address</label>
    <textarea class="textarea" name="address" required><?php 
     echo $result['Address']; ?></textarea>

</div>

<div class="input_field terms">
    <label class="check">
        <input type="checkbox" required>
        <span class="checkmark"></span>

    </label>
    <p>Agree to terms and conditions</p>
</div>

<div class="input_field">
    <input type="submit" value="update details" class="btn" name="update">

</div>
</div>
</form>
</div>


</body>
</html>

<?php
if($_POST["update"])
{
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
        $query = "UPDATE FORM set fname='$fname',lname='$lname',password='$password',conpassword=
         '$conpassword',Gender='$gender',phone='$phone',caste='$caste',language='$language1'
         ,gmail='$gmail',Address='$address' WHERE ID='$ID'";

      $data = mysqli_query($conn,$query);

     if($data)
     {
        echo "<script>alert('record updated')</script>";
        ?>

<meta http-equiv="refresh" content="0; url =http://localhost/crud/display.php" />
        <?php

     }
     else
     {
        echo "faild to update";
     }
    }
 
?>
 